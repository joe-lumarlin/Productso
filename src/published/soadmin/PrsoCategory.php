<?php

Admin::model('joelumarlin\productso\Models\PrsoCategory')->title('Products Category')->display(function ()
{
	$display = AdminDisplay::tree();
	$display->value('name');
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
			FormItem::text('name', 'Title'),
			FormItem::text('slug', 'Lable'),
			FormItem::checkbox('showtop', 'Main menu')->defaultValue(true),
			FormItem::checkbox('showside', 'Side menu')->defaultValue(true),
			FormItem::checkbox('showbottom', 'Footer menu')->defaultValue(true),
			FormItem::checkbox('showcontent', 'In Category list')->defaultValue(true),
			FormItem::ckeditor('note', 'Annotation'),
			FormItem::ckeditor('desc', 'Discription'),
	]);
	return $form;
});