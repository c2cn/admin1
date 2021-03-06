<div class="modal fade" id="menu-add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title"><i class="fa fa-copy"></i>
                    <span>添加菜单</span></h4>
            </div>
            <form role="form">
                <input type="hidden" id="template_id" name="id"/>
                <div class="modal-body">

                    <div class="callout callout-danger">
                        <i class="icon fa fa-warning"></i> {{ Lang::get('templates.warning') }}
                    </div>

                    <div class="form-group">
                        <label for="template_name">{{ Lang::get('templates.name') }}</label>
                        <input type="text" class="form-control" name="name" id="template_name"
                               placeholder="{{ Lang::get('templates.example') }}"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left btn-delete"><i
                                class="fa fa-trash"></i> {{ Lang::get('app.delete') }}</button>
                    <button type="button" class="btn btn-primary pull-right btn-save"><i
                                class="fa fa-save"></i> {{ Lang::get('app.save') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
