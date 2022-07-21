<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://www.codexinfra.com
 * @since      1.0.0
 *
 * @package    Ci_Admin
 * @subpackage Ci_Admin/admin/partials
 */

function ci_form_start($title)
{
    echo '<div class="card card-bordered card-preview">
    <div class="card-inner">
        <div class="preview-block">
            <span class="preview-title-lg overline-title">' . $title . '</span>
            <div class="row gy-4">';
}

function ci_form_end()
{
    echo '</div></div></div></div>';
}

function ci_form_group_input($label, $type, $placeholder, $class = "", $id = "", $value = "")
{
    $id = $id == "" ? "" : 'id = ' . $id;
    echo '<div class="col-sm-4">
            <div class="form-group">
                <label class="form-label">' . $label . '</label>
            </div>
         </div>
         
         <div class="col-sm-8">
            <div class="form-group">
                <div class="form-control-wrap">
                <input type="' . $type . '" class="form-control form-control-lg ' . $class . '" ' . $id . ' value="' . $value . '" placeholder="' . $placeholder . '">
                </div>
            </div>
         </div>
         ';
}

function ci_form_group_textarea($label, $placeholder, $class = "", $id = "", $value = "")
{
    $id = $id == "" ? "" : 'id = ' . $id;
    echo '<div class="col-sm-4">
    <div class="form-group">
        <label class="form-label">' . $label . '</label>
    </div>
</div>

<div class="col-sm-8">
    <div class="form-group">
        <div class="form-control-wrap">
        <textarea class="form-control form-control-sm ' . $class . '" ' . $id . ' placeholder="' . $placeholder . '">' . $value . '</textarea>
        </div>
    </div>
</div>
';
}


function ci_form_group_dropdown($label, $value, $class = "", $id = "")
{
    $id = $id == "" ? "" : 'id = ' . $id;
    echo '<div class="col-sm-4">
    <div class="form-group">
    <label class="form-label">' . $label . '</label></div></div>

<div class="col-sm-8">
    <div class="form-group">
        <div class="form-control-wrap ">
            <div class="form-control-select">
            <select  ' . $id . ' class="form-control js-select2 ' . $class . '">';
    foreach ($value as $val) {
        echo '<option value="' . $val['key'] . '">' . $val['value'] . '</option>';
    }
    echo '</select></div></div></div></div>';
}
function ci_form_group_multiselect($label, $value, $class = "", $id = "")
{
    $id = $id == "" ? "" : 'id = ' . $id;
    echo '<div class="col-sm-4">
    <div class="form-group">
    <label class="form-label">' . $label . '</label></div></div>';

    echo '<div class="col-sm-8">
    <div class="form-group">
        <div class="form-control-wrap ">
            <div class="form-control-select">
            <select  ' . $id . ' class="form-select js-select2 ' . $class . '" multiple>';
    foreach ($value as $val) {
        echo '<option value="' . $val['key'] . '">' . $val['value'] . '</option>';
    }
    echo '</select></div></div></div></div>';
}

function ci_form_group_radio($label, $value, $name, $class = "", $id = "")
{
    $id = $id == "" ? "" : 'id = ' . $id;
    echo '<div class="col-sm-4">
    <label class="form-label">' . $label . '</label></div>
    <div class="col-sm-8">
    <div class="d-flex flex-wrap">';
    foreach ($value as $val) {
        echo '<div class="p-2">
        <div class="preview-block">
            <div class="custom-control custom-control-sm custom-radio">
            <input type="radio" name="' . $name . '" id="' . $val['id'] . '" class="custom-control-input ' . $class . '"  value="' . $val['value'] . '">
            <label class="custom-control-label" for="' . $val['id'] . '">' . $val['label'] . '</label>
            </div>
        </div>
    </div>';
    }

    echo '</div></div>';
}

function ci_form_group_checkbox($label, $value, $name, $class = "", $id = "")
{

    $id = $id == "" ? "" : 'id = ' . $id;
    echo '<div class="col-sm-4">
    <label class="form-label">' . $label . '</label></div>';

    echo '<div class="col-sm-8">
    <div class="d-flex flex-wrap">';
    foreach ($value as $val) {
        echo '<div class="p-2">
        <div class="preview-block">
            <div class="custom-control custom-control-sm custom-checkbox">
            <input type="checkbox" name="' . $name . '" id="' . $val['id'] . '" class="custom-control-input ' . $class . '"  value="' . $val['value'] . '">
            <label class="custom-control-label" for="' . $val['id'] . '">' . $val['label'] . '</label>
            </div>
        </div>
    </div>';
    }
    echo '</div></div>';
}

function ci_submit_btn($class = "btn-primary", $btn_text, $option_key, $data_class)
{
    echo '<div class="text-center" ><button type="button" class="btn btn-round ci_submit btn-primary ' . $class . '" option-key="' . $option_key . '" data-class="' . $data_class . '">' . $btn_text . '&nbsp;<em class="icon ni ni-arrow-right"></em></button></div>';
}
