<div class="modal fade" id="modal-action_router" data-show-callback="initChosen">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="javascript:callbackModal($('#form-action_router'), $('#modal-action_router'));" callback="setFormData" form-element="#formCreateSubMenu" id="form-action_router" method="get" accept-charset="utf-8">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Choose Router link</h4>
				</div>
				<div class="modal-body inline-block full-width">
					<div class="grid_12 grid">
						<div class="grid_6">
							<?php echo lang('create_menu_controller_list', 'controller_router');?>
							<select id="select-controller_router" data-load-url="<?php echo site_url('ajax/load_method_by_control_name'); ?>" data-callback="updateSelect" data-target="#select-action_router" data-placeholder="Choose a controller name ..." style="width:100%;" name="controller_router" class="chosen-select input-long extra data-auto-load">
					            <?php foreach ($controller_lists as $key => $controller): ?>
					            	<option value="<?php echo $controller ?>"><?php echo $controller ?></option>
					            <?php endforeach ?>
							</select>
						</div>
						<div class="grid_6">
							<?php echo lang('create_menu_action_router_label', 'action_router');?>
							<select id="select-action_router" data-placeholder="Choose a country..." style="width:100%;" name="action_router" class="chosen-select input-long extra">
					            <?php foreach ($first_action_lists as $key => $action): ?>
					            	<option value="<?php echo $first_controller.'/'.$action ?>"><?php echo $action ?></option>
					            <?php endforeach ?>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo lang('Close') ?></button>
					<button type="submit" class="btn btn-primary"><?php echo lang('Choose') ?></button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-title_key" data-show-callback="initChosen">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="javascript:callbackModal($('#form-title_key'), $('#modal-title_key'));" callback="setFormData" form-element="#formCreateSubMenu" id="form-title_key" method="get" accept-charset="utf-8">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"><?php echo lang('Choose_language_title') ?></h4>
				</div>
				<div class="modal-body inline-block full-width">
					<select id="selec-language_key" data-load-url="<?php echo site_url('languages/common'); ?>" data-callback="initSelect" data-placeholder="<?php echo lang('Choose_a_function_name'); ?>..." style="width:100%;" name="title_key" class="chosen-select input-long extra data-auto-load data-init-load">
			            <?php foreach ($lang_data as $key => $language): ?>
			            	<option value="<?php echo $key ?>"><?php echo $key ?> - <?php echo $language ?></option>
			            <?php endforeach ?>
					</select>
					<div class="grid alert alert-warning" style="margin-top: 20px;">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong><?php echo lang('Notification'); ?></strong> <?php echo sprintf($this->lang->line('Language_keyword_is_loaded_from_file_s'), '../'. APP_PHP_LANG.'/'.@$lang_folder.'/'.@$lang_key.'_lang.php'); ?>.
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo lang('Close') ?></button>
					<button type="submit" class="btn btn-primary"><?php echo lang('Choose') ?></button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-parent_menu" data-show-callback="initChosen">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="javascript:callbackModal($('#form-parent_menu'), $('#modal-parent_menu'));" callback="setFormData" form-element="#formCreateSubMenu" id="form-parent_menu" method="get" accept-charset="utf-8">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Choose Router link</h4>
				</div>
				<div class="modal-body inline-block full-width">
					<div class="grid">
						<div class="grid_12">
							<?php echo lang('create_menu_controller_list', 'controller_router');?>
							<select id="select-parent_menu" data-callback="updateSelect" data-target="#select-parent_menu" data-placeholder="Choose a controller name ..." style="width:100%;" name="parent_menu" class="chosen-select input-long extra">
					            <?php foreach ($menus as $key => $menu): ?>
					            	<option value="<?php echo $menu['id'] ?>"><?php echo lang($menu['title_key']); ?></option>
					            <?php endforeach ?>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo lang('Close') ?></button>
					<button type="submit" class="btn btn-primary"><?php echo lang('Choose') ?></button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="grid_12">

	<div class="module">

		<h2 class="text-primary"><span>Title</span></h2>

		<div class="module-body">

			<div class="grid_12">

				<?php echo form_ajax_multipart('menus/sub_menu', 'id="formCreateSubMenu"'); ?>

					<div class="grid_12 grid">

		                <div class="grid_6">

		                    <?php echo lang('create_menu_title_key_label', 'title_key');?>

		                    <?php echo form_input($title_key);?>

		                </div>

		                <div class="grid_6 div-icon">

		                	<?php echo lang('create_menu_icon_label', 'icon');?>
		                    
		                    <input type="file" name="icon" id="inputIcon" class="input-long extra uniform" value="" placeholder="Choose file size(128x128px)">

		                    <label id="inputIcon-error" class="error" for="inputIcon"></label>

		                </div>

		            </div>

		            <div class="grid grid_12">

		                <div class="grid_6">

		                	<?php echo lang('create_menu_action_router_label', 'action_router');?>

				            <?php echo form_input($action_router); ?>

		                </div>

		                <div class="grid_6">

		                    <?php echo lang('create_menu_parent_menu_label', 'parent_menu');?>

		                    <?php echo form_input($parent_menu); ?>

		                </div>

		            </div>

		            <div class="grid_12">

			            <div class="grid_6 grid">

		                    <?php echo lang('create_menu_description_label', 'description');?>

		                    <?php echo form_textarea($description);?>

		                </div>

		                <div class="grid_6 grid">

		                	<?php echo lang('table_option', 'is_show'); ?>

		                    <div class="grid_12 grid">

			                    <div class="radio grid_6 grid">

			                    	<label class="" style="padding:0;">

			                    		<input type="radio" value="1" name="is_show" class="uniform" checked="checked">

			                    		<?php echo lang('Showing_in_submenu_bar') ?> ?

			                    	</label>

			                    </div>

			                </div>

			                <div class="grid_12 grid">

			                    <div class="radio grid_6 grid">

			                    	<label class="" style="padding:0;">

			                    		<input type="radio" value="0" name="is_show" class="uniform">

			                    		<?php echo lang('Only_use_for_breadcrumb') ?> ?

			                    	</label>

			                    </div>

			                </div>

		                </div>

	                </div>

		            <div class="grid_12 grid text-right">

				        <?php echo form_submit('submit', lang('create_menu_submit_btn'), 'class="submit-green uniform pull-right"');?>

				    </div>

				<?php echo form_close();?>

			</div>

		</div>

	</div>

</div>