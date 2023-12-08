<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Uusers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Uuser extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Uusers';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Uusers());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('contact', __('Contact'));
        $grid->column('current_address', __('Current address'));
        $grid->column('password', __('Password'));
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
        $show = new Show(Uusers::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('contact', __('Contact'));
        $show->field('current_address', __('Current address'));
        $show->field('password', __('Password'));
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
        $form = new Form(new Uusers());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->number('contact', __('Contact'));
        $form->text('current_address', __('Current address'));
        $form->password('password', __('Password'));

        return $form;
    }

    public function showuserdetails() {

        $user_id = Auth::id();

        $userdetails = DB::table('users')
            ->select('*')
            ->where('users.id','=', $user_id)
            ->get();

        return view('profile._profileinfo')->with('userdetails', $userdetails);

    }

    public function updateprofile(Request $request, $id) {
        $user_id = Auth::id();

        $profile = user::find($user_id);
        $profile->name = $request->input('updatename');
        $profile->email = $request->input('updateemail');
        $profile->contact = $request->input('updatecontact');
        $profile->current_address = $request->input('updateaddress');
        $profile->update();

        return redirect()->back()->with('sucess', 'Profile updated!');
     }
}
