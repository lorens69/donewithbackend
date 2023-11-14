<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\RequestForms;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;



class RequestForm extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'RequestForms';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new RequestForms());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Full name'));
        $grid->column('contact', __('Contact'));
        $grid->column('email', __('Email address'));
        $grid->column('current_address', __('Current address'));
        $grid->column('model', __('Car model'));
        $grid->column('yom', __('Yom'));
        $grid->column('service', __('Service name'));
        $grid->column('date', __('Date time'));
        $grid->column('specialrequest', __('Special requests'));
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
        $show = new Show(RequestForms::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Full name'));
        $show->field('contact', __('Contact'));
        $show->field('email_address', __('Email address'));
        $show->field('current_address', __('Current address'));
        $show->field('model', __('Car model'));
        $show->field('yom', __('Yom'));
        $show->field('service', __('Service name'));
        $show->field('date', __('Date time'));
        $show->field('specialrequest', __('Special requests'));
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
        $form = new Form(new RequestForms());

        $form->text('name', __('Full name'));
        $form->number('contact', __('Contact'));
        $form->text('email', __('Email address'));
        $form->text('current_address', __('Current address'));
        $form->text('model', __('Car model'));
        $form->number('yom', __('Yom'));
        $form->text('service', __('Service name'));
        $form->date('date', __('Date time'))->default(date('Y-m-d'));
        $form->text('specialrequest', __('Special requests'));

        return $form;
    }


    function formPost (Request $request) {
        $request->validate([
            'name'=> 'required',
            'contact' => 'required',
            'email'=> 'required',
            'current_address' => 'required',
            'model' => 'required',
            'yom' => 'required',
            'service' => 'required',
            'date' => 'required',
            'special_instructions' => 'required',
        ]);

        $data['name'] = $request->name;
        $data['contact'] = $request->contact;
        $data['email'] = $request->email;
        $data['current_address'] = $request->current_address;
        $data['model'] = $request->model;
        $data['yom'] = $request->yom;
        $data['service'] = $request->service;
        $data['date'] = $request->date;
        $data['special_instructions'] = $request->specialrequest;
        $form = RequestForms::create($data);

        if(!$form){

            return redirect()->back()->with('error', 'Submission Failed, please check your inputs.');

        }

        return redirect()->back()->with('success', 'Your reservation has been sent successfully! Please wait for our staffs to call you in a minute. .');

    }
}
