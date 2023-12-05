<?php

namespace App\Admin\Controllers;

use Illuminate\Support\Facades\Auth;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Reservations;
use Illuminate\Http\Request;

class Reservation extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Reservations';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Reservations());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('contact', __('Contact'));
        $grid->column('email', __('Email'));
        $grid->column('address', __('Address'));
        $grid->column('model', __('Model'));
        $grid->column('yom', __('Yom'));
        $grid->column('service', __('Service'));
        $grid->column('date', __('Date'));
        $grid->column('special_instructions', __('Special instructions'));
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
        $show = new Show(Reservations::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('contact', __('Contact'));
        $show->field('email', __('Email'));
        $show->field('address', __('Address'));
        $show->field('model', __('Model'));
        $show->field('yom', __('Yom'));
        $show->field('service', __('Service'));
        $show->field('date', __('Date'));
        $show->field('special_instructions', __('Special instructions'));
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
        $form = new Form(new Reservations());

        $form->text('name', __('Name'));
        $form->text('contact', __('Contact'));
        $form->email('email', __('Email'));
        $form->text('address', __('Address'));
        $form->text('model', __('Model'));
        $form->number('yom', __('Yom'));
        $form->text('service', __('Service'));
        $form->text('date', __('Date'));
        $form->text('special_instructions', __('Special instructions'));

        return $form;
    }

    function sendrequest (Request $request) {
        // $request->validate([
        //     'name'=> 'required',
        //     'contact' => 'required',
        //     'email'=> 'required',
        //     'current_address' => 'required',
        //     'model' => 'required',
        //     'yom' => 'required',
        //     'service' => 'required',
        //     'date' => 'required',
        // ]);

        $data['name'] = $request->name;
        $data['contact'] = $request->contact;
        $data['email'] = $request->email;
        $data['address'] = $request->current_address;
        $data['model'] = $request->model;
        $data['yom'] = $request->yom;
        $data['service'] = $request->service;
        $data['date'] = $request->date;
        $data['special_instructions'] = $request->special_instructions;
        $form = Reservations::create($data);

        if(!$form){

            return redirect()->back()->with('error', 'Submission Failed, please check your inputs.');

        }

        return redirect()->back()->with('success', 'Your reservation has been sent successfully! Please wait for our staffs to call you.');

    }
}
