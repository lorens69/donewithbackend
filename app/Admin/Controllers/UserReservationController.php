<?php

namespace App\Admin\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\UserReservation;

class UserReservationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'UserReservation';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new UserReservation());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('contact', __('Contact'));
        $grid->column('current_address', __('Current address'));
        $grid->column('model', __('Model'));
        $grid->column('yom', __('Yom'));
        $grid->column('service_name', __('Service name'));
        $grid->column('date', __('Date'));
        $grid->column('special_instructions', __('Instructions'));
        $grid->column('status', __('Status'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(UserReservation::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('contact', __('Contact'));
        $show->field('current_address', __('Current address'));
        $show->field('model', __('Model'));
        $show->field('yom', __('Yom'));
        $show->field('service_name', __('Service name'));
        $show->field('date', __('Date'));
        $show->field('special_instructions', __('Instructions'));
        $show->field('status', __('Status'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new UserReservation());

        $form->number('user_id', __('User id'));
        $form->text('contact', __('Contact'));
        $form->text('current_address', __('Current address'));
        $form->text('model', __('Model'));
        $form->text('yom', __('Yom'));
        $form->text('service_name', __('Service name'));
        $form->text('status', __('Status'));
        $form->date('date', __('Date'))->default(date('Y-m-d'));
        $form->text('special_instructions', __('Instructions'));

        return $form;
    }

    function usersendrequest (Request $request) {


        $user_id = Auth::id();
        $request->validate([
            'model' => 'required',
            'yom' => 'required',
            'service' => 'required',
            'date' => 'required',
        ]);
        $data['user_id'] = $user_id;
        $data['model'] = $request->model;
        $data['yom'] = $request->yom;
        $data['service_name'] = $request->service;
        $data['status'] = "pending";
        $data['date'] = $request->date;
        $data['special_instructions'] = $request->special_instructions;
        $form = UserReservation::create($data);


        if ($request->has('model') && $request->has('yom') && $request->has('service') && $request->has('date')) {
            return redirect()->back()->with('success', 'Your reservation has been sent successfully! Please wait for our staffs to call you.');
        }elseif (!$form) {
            return redirect()->back()->with('error', 'Submission Failed, please check your inputs.');
        }




        // if(!$form){

        //     return redirect()->back()->with('error', 'Submission Failed, please check your inputs.');

        // }else{
        //     return redirect()->back()->with('success', 'Your reservation has been sent successfully! Please wait for our staffs to call you.');
        // }

    }

    function showreservations() {

        $user_id = Auth::id();
            $reservations = DB::table('user_reservation')
            ->select('*')
            ->where('user_id','=',$user_id)
            ->get();

            return view('profile._bookingrequests', ['reservations'=>$reservations])->with('reservations', $reservations);
    }

    function cancel($id) {

        UserReservation::destroy($id);
        return redirect()->back()->with('success','Booking reservation cancelled.');
    }
}
