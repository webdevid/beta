
<style>
  .ls_navigation_ctrl{
    
  }
  .ls_navigation_ctrl { list-style-type: none; margin: 0; padding: 0; zoom: 1; }
  .ls_navigation_ctrl li {
        margin: 0 5px 5px 5px;
        padding: 10px 15px;
        width: 90%;
        background: #ccc;
    }
  .ls_navigation_ctrl .ui-sortable-placeholder,
  .ls_navigation_ctrl .ui-sortable-helper{
    max-height:40px;
  }
  .icon-right {
    padding-left:5px;
    text-align: right;
    float: right;
    cursor: pointer;
  }
</style>    
<div class="modal fade modal-lg" id="libraryModalMenus" tabindex="-1" role="dialog" aria-labelledby="libraryModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="libraryModalLabel">Manage Menus / Navigation</h4>
                </div>
                <div class="modal-body">
                    
                     <div class="row">
                       <div class="col-xs-6 ls-modal-button-group p-b-0">
                          <div class="form-group">
                            <label for="colum-bg">Line Height Menu</label>
                            <input type="text" class="form-control" id="menu_title_lineheight" class="form-control" placeholder="">
                             <input type='text' id="menus_color"/> 
                         </div> 
                        </div>
                         <div class="col-xs-6 ls-modal-button-group p-b-0">
                          <div class="form-group">
                            <label for="colum-bg">Float Menu</label>
                            <select class="form-control" id="menu_title_float">
                                 <option value="float-left"> Left </option>
                                 <option value="float-right"> Right </option>
                                 <option value="float-center"> Center </option>
                              </select>
                          </div> 
                        </div>
                    </div>
                    <hr class="p-b-0 p-t-0 m-t-0 m-b-10">
                   
                    <div class="row">
                        <div class="col-xs-12 ls-modal-button-group">
                            <div class="btn-group" role="group" aria-label="">
                                <button type="button" class="btn btn-default add-new-menu" data-action="">Add New</button>
                            </div>
                        </div>
                        <div class="col-xs-6">
                             <div class="scroll no-margin ls-modal-overflow">
                               <ul class="ls_navigation_ctrl">
                                <li data-title="Home" data-link="#home" data-linktype="int"><a href="#">Home </a><span class="icon-right" data-action="update"><i class="fa fa-gear"></i></span> <span class="icon-right" data-action="remove"><i class="fa fa-close"></i></span></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-xs-6">
                              <div class="no-margin">
                               <div class="form-group">
                                <label for="colum-bg">Menu Title</label>
                                <input type="text" class="form-control" id="menu_title_update" class="form-control" placeholder="">
                              </div>
                              <div class="form-group">
                                  <label for="colum-bg">Menu Link</label>
                                  <select class="form-control" id="menu_title_link">
                                     <option value="ext"> External Link </option>
                                     <option value="int"> div Link </option>
                                     <option value="pag"> Page Link </option>
                                  </select>
                              </div>
                              <div class="form-group menu-link-option hide" id="ext_link">
                                  <label for="colum-bg">URL  / Link</label>
                                  <input type="text" class="form-control" id="ext_menu_title_link" class="form-control" placeholder="">
                              </div>
                              <div class="form-group menu-link-option hide" id="int_link">
                                <label for="colum-bg">Internal Page Link</label>
                                  <select class="form-control" id="int_menu_title_link">
                                  </select>
                               </div>
                               <div class="form-group menu-link-option hide" id="pag_link">
                                <label for="colum-bg">Page Link</label>
                                  <select class="form-control" id="pag_menu_title_link">
                                  </select>
                               </div>
                                
                                
                            </div>
                          </div>
                      
                    </div>
                </div>
                <div class="modal-footer">
                   <div class="btn-group" role="group" aria-label="modal-navigation">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary"  id="updateMenus">Update</button>
                   </div>
                </div>
            </div>
        </div>
    </div>
