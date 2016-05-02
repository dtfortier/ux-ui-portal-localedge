<div id="le-dash">
    <div class="container">

        <ul class="nav nav-pills">
          <li role="presentation" class="active"><a href="#inputs">Inputs</a></li>
          <li role="presentation"><a href="#validation">Form Validation</a></li>
          <li role="presentation"><a href="#checkbox_radio">Checkboxes & Radio</a></li>
          <li role="presentation"><a href="#buttons">Buttons & Links</a></li>
          <li role="presentation"><a href="#dropdown_select">Select</a></li>
          <li role="presentation"><a href="#progress">Progress Indicators</a></li>
          <!--<li role="presentation"><a href="#submission">Submission</a></li> -->        
        </ul>
        
        
    <div class="col-sm-12 blog-main">
        
        
    <div id="inputs">
            <div class="row">
              <div class="col-md-12">
                <h1>Text Input</h1>
                  <h3>Example</h3>
                  
                  
                  <div class="row">
                        <div class="col-md-7">
                            <label for="#">First Name</label>
                                <div class="form-group has-feedback">
                                        <input type="text" class="form-control" placeholder="First Name" id="" name="">
                                </div>
                        </div>
                      </div>
                
                </div>
            </div>
        
            <div class="spacer"></div>
        
            <div class="row"> 
                <div class="col-md-6">
                    <pre class="brush: html">
                        <div class="row">
                        <div class="col-md-7">
                            <label for="#">First Name</label>
                                <div class="form-group has-feedback">
                                    <div class="input-group" id="">
                                        <input type="text" class="form-control" placeholder="First Name" id="" name="">
                                    </div>
                                </div>
                        </div>
                      </div>
                    </pre>
                </div>
                <div class="col-md-6">
                    <h3 class="notes">Notes</h3>
                    <p>Notes go here.</p>

                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h1 class="sub-category">Text Input with button attached</h1>
                  <h3>Example</h3>
                      <div class="row">
                        <div class="col-md-7">
                            <label for="#">Field Label</label>
                            <div class="form-group has-feedback">
                                <div class="input-group startDateWrapper" id="datetimepicker9">
                                    <input type="text" class="form-control datepicker hasDatepicker tooltipstered" placeholder="Please enter a date in mm/dd/yyy format" id="startDatePicker" name="startDatePicker">
                                    <span class="input-group-addon" id="customStartDatePickerBtn">
                                        <span class="fa fa-lg form-control-feedback"></span>
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
              </div>
        
            <div class="spacer"></div>
        
            <div class="row"> 
                <div class="col-md-6">
                    <pre class="brush: html">
                        <div class="row">
                        <div class="col-md-7">
                            <label for="#">Field Label</label>
                            <div class="form-group has-feedback">
                                <div class="input-group startDateWrapper" id="datetimepicker9">
                                    <input type="text" class="form-control datepicker hasDatepicker tooltipstered" placeholder="Please enter a date in mm/dd/yyy format" id="startDatePicker" name="startDatePicker">
                                    <span class="input-group-addon" id="customStartDatePickerBtn">
                                        <span class="fa fa-lg form-control-feedback"></span>
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                      </div>
                    </pre>
                </div>
                <div class="col-md-6">
                    <h3 class="notes">Notes</h3>
                    <p>Notes go here.</p>

                </div>
            </div>
            
          
        
        <div class="spacer"></div>    

            <div class="row">
              <div class="col-md-12">
                <h1 class="sub-category">Text input with field help</h1>
                  <h3>Example</h3>
                    <div class="row">
                      <div class="col-md-7">
                          <label for="inputSuccess2">Field Label</label>
                            <div class="form-group has-feedback">
                              <input type="text" class="form-control" id="inputError2" aria-describedby="inputError2Status" placeholder="Must have at least 6 characters">
                              <span id="inputError2Status" class="sr-only">(error)</span>
                            </div>
                        </div>
                         <div class="col-md-7">
                             <label for="inputSuccess2">Field Label</label>
                            <div class="form-group has-feedback">
                              <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" placeholder="Your full first and last name">
                              <!--<span class="fa fa-lg form-control-feedback fa-question-circle" aria-hidden="true"></span>-->
                              <span id="inputSuccess2Status" class="sr-only">(success)</span>
                            </div>
                         </div>  
                    </div>
                </div>
            </div>
        
           <div class="spacer"></div>
        
           <div class="row"> 
                <div class="col-md-6">
                    <pre class="brush: html">
                       <div class="row">
                      <div class="col-md-7">
                          <label for="inputSuccess2">Field Label</label>
                            <div class="form-group has-feedback">
                              <input type="text" class="form-control" id="inputError2" aria-describedby="inputError2Status" placeholder="Must have at least 6 characters">
                              <span id="inputError2Status" class="sr-only">(error)</span>
                            </div>
                        </div>
                         <div class="col-md-7">
                             <label for="inputSuccess2">Field Label</label>
                            <div class="form-group has-feedback">
                              <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" placeholder="Your full first and last name">
                              <!--<span class="fa fa-lg form-control-feedback fa-question-circle" aria-hidden="true"></span>-->
                              <span id="inputSuccess2Status" class="sr-only">(success)</span>
                            </div>
                         </div>  
                    </div>
                    </pre>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <h3 class="notes">Field Help</h3>
                        <p><span class="inner-heading">Usage: </span>Form Inputs</p>
                        <p><span class="inner-heading">Interactions: </span>Helpful hint or direction is the placeholder text in each input. This placeholder disappears once the user types inside the field.
                        <p><span class="inner-heading">Colors: </span></p>
                        <p><span class="inner-heading">Size: </span></p>
                    </div>
             
                </div>
            </div>
        </div> <!-- End inputs -->
    
        
            <div class="spacer"></div>    
        
                <div class="row">
                      <div class="col-md-12">
                        <h1 class="sub-category">Alignment</h1>
                          <h3>Example</h3>
                      </div>
                 </div>
              

              <div class="spacer"></div>

              <div class="row"> 
                    <div class="col-md-6">
                        <pre class="brush: html">

                        </pre>
                    </div>
                    <div class="col-md-6">
                        <h3 class="notes">Notes</h3>
                        <p>Notes go here.</p>

                    </div>
                </div>
           
     <div class="spacer"></div>
        
        <!-- Form Validation -->
        <div id="validation">
            <div class="row">
                <h1>Form Validation</h1>
                  <h3>Example</h3>
                
                <div class="col-xs-12">
          
                   <form id="defaultForm" method="post" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Username</label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" name="username" />
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Email address</label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" name="email" />
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Password</label>
                                    <div class="col-lg-5">
                                        <input type="password" class="form-control" name="password" />
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Retype password</label>
                                    <div class="col-lg-5">
                                        <input type="password" class="form-control" name="confirmPassword" />
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label" id="captchaOperation"></label>
                                    <div class="col-lg-2">
                                        <input type="text" class="form-control" name="captcha" />
                                    </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-9 col-lg-offset-3">
                                    <button type="submit" class="btn btn-primary">Sign up</button>
                                </div>
                            </div>
                    </form>      
                    
            </div>
        </div>
            

           <div class="spacer"></div>
        
           <div class="row"> 
                <div class="col-md-6">
                    <pre class="brush: html">
                         <form id="defaultForm" method="post" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Username</label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" name="username" />
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Email address</label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" name="email" />
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Password</label>
                                    <div class="col-lg-5">
                                        <input type="password" class="form-control" name="password" />
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Retype password</label>
                                    <div class="col-lg-5">
                                        <input type="password" class="form-control" name="confirmPassword" />
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label" id="captchaOperation"></label>
                                    <div class="col-lg-2">
                                        <input type="text" class="form-control" name="captcha" />
                                    </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-9 col-lg-offset-3">
                                    <button type="submit" class="btn btn-primary">Sign up</button>
                                </div>
                            </div>
                    </form> 
                    </pre>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <h3 class="notes">Field Validation</h3>
                        <p><span class="inner-heading">Usage: </span>Form Input Validation</p>
                        <p><span class="inner-heading">Valid Info Interaction: </span>If correct info is entered into a field, the field label and border turn green to indicate "validated and correct information".</p>
                        <p><span class="inner-heading">Invalid Info Interaction: </span>If incorrect info is entered into a field, the field label and border turns red with red information below the field explaining the error and how to correct it.</p>
                        <p><span class="inner-heading">Submission: </span>Inputs validate live. The submission or save button will not be active until all fields are filled in.</p>
                        <p><span class="inner-heading">Colors: </span>Class "has error" is red border and label; #a94442. Class "has-success" is green border and label: #3c763d.</p>
                        <p><span class="inner-heading">jQuery Plugin: </span><a href="https://plugins.jquery.com/bootstrapValidator/">Bootstrap Validator</a></p>
                    </div>
             
             
                </div>
            </div>
        </div>
        <!-- End Validation-->    
        
    <div class="spacer"></div>    
        
          <div id="checkbox_radio">
                <div class="row">
                      <div class="col-md-12">
                        <h1>Checkboxes & Radio</h1>
                          <h3>Checkbox Example</h3>
                      </div>
                         <div class="col-sm-12">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" value="">
                               
                                Option one is this and that — be sure to include why it's great
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" value="" checked="">
                                
                                Option two is checked by default
                              </label>
                            </div>
                            <div class="checkbox disabled">
                              <label>
                                <input type="checkbox" value="" disabled="">
                               This is disabled
                              </label>
                            </div>
                        </div>
                    
                        <div class="col-md-12">
                          <h3>Radio Example</h3>
                      </div>
                         <div class="col-sm-12">
                            <div class="radio">
                              <label>
                                <input type="radio" name="options" id="option1" autocomplete="off" checked>
                               
                                Option one 
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" name="options" id="option2" autocomplete="off" checked>
                                
                                Option two
                              </label>
                            </div>
                            <div class="radio disabled">
                              <label>
                                <input type="radio" name="options" id="option3" autocomplete="off" checked disabled="">
                               Option three
                              </label>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                          <h3>Toggle Example</h3>
                        </div>
                         <div class="col-sm-12">
                          
                             
                             
                             <div class="toggle">
                                 <div class="filterOption selected">
                                     <div class="filterOptionMain">
                                            <div class="filterTitle">Hide</div>
                                            <div class="filterDesc"></div>
	                                        <div class="filterIcon"></div>
                                     </div>
                                 </div>
                                 <div class="filterOption">
                                     <div class="filterOptionMain">
                                         <div class="filterTitle">Show</div>
                                         <div class="filterDesc"></div>
                                         <div class="filterIcon"></div>
                                     </div>
                                </div>
                             </div>
                             
                             
                             
                             
                             
                         </div>
                 </div>
              

              <div class="spacer"></div>

              <div class="row"> 
                    <div class="col-md-6">
                        <pre class="brush: html">

                        </pre>
                    </div>
                    <div class="col-md-6">
                        <h3 class="notes">Notes</h3>
                        <p>Notes go here.</p>

                    </div>
                </div>
            </div>
        
    <div class="spacer"></div>
        
      <div id="buttons">
            <div class="row">
                <div class="col-sm-12">

                    <div class="row">

                        <div class="col-md-12">
                          <h1>Buttons and Links</h1>
                          <h3>Example</h3>

                                <button type="button" class="btn btn-primary">Primary</button>
                             <button type="button" class="btn btn-action">Action</button>
                             <button type="button" class="btn btn-link">Link</button>
                             <button type="button" class="btn btn-disabled">Disabled Button</button>
                             <button type="button" class="btn btn-link inactive">Inactive Link</button>

                        </div>
                    </div>
                <div class="spacer"></div>
                    <div class="row"> 
                            <div class="col-md-6">
                                <pre class="brush: html">
                                     <button type="button" class="btn btn-primary">Primary</button>
                                     <button type="button" class="btn btn-action">Action</button>
                                     <button type="button" class="btn btn-link">Link</button>
                                     <button type="button" class="btn btn-disabled">Disabled Button</button>
                                     <button type="button" class="btn btn-link inactive">Inactive Link</button>
                                     
                                </pre>
                            </div>
                            <div class="col-md-6">
                                <h3 class="notes">Notes</h3>
                                <p>Buttons are categorized by style. (primary, standard and action)</p>
                                <p>Primary buttons are blue with white semibold text. Primary buttons are
                                used for submissions, and other simple actions.</p>
                                <p>Action buttons are orange with white semibold text. Action buttons are
                                used for creations and submission as well as special actions, like activations and product upsells.</p>
                                <p>Link buttons are just links and are
                                used for close, and cancels.</p>


                            </div>
                    </div>
                </div>
            </div>
        </div>
        
            <div class="spacer"></div>
        
  
            <div class="row">
                <div class="col-sm-12">

                    <div class="row">

                        <div class="col-md-12">
                           <h1 class="sub-category">Submission vs. Save vs. Create</h1>
                            <h3>Example</h3>
                                <div class="row">  
                                    <div class="col-md-3">
                                     <h4>Submit</h4>    
                                     <button type="button" class="btn btn-action horizontal">Submit Form</button>
                                     <button type="button" class="btn btn-action horizontal">Submit Profile</button>  
                                    </div>
                                    <div class="col-md-3">
                                     <h4>Save</h4>    
                                     <button type="button" class="btn btn-primary horizontal">Save Changes</button>
                                     <button type="button" class="btn btn-primary horizontal">Save New Section</button>
                                     <button type="button" class="btn btn-primary horizontal">Save Settings</button>    
                                    </div>
                                    <div class="col-md-3">
                                     <h4>Create</h4>    
                                     <button type="button" class="btn btn-action horizontal">Create Account</button>
                                     <button type="button" class="btn btn-action horizontal">Create New Item</button>   
                                    </div>
                                </div>

                        </div>
                    </div>
                <div class="spacer"></div>
                    <div class="row"> 
                            <div class="col-md-6">
                                <pre class="brush: html">
                                            <button type="button" class="btn btn-action">Submit</button>
                                            <button type="button" class="btn btn-primary">Save</button>
                                            <button type="button" class="btn btn-action">Create</button>
                                </pre>
                            </div>
                            <div class="col-md-6">
                                <h3 class="notes">Notes</h3>
                                <p>Submit and Create buttons will use <code>btn-action</code> class.</p>
                                <p>Save buttons will use <code>btn-primary</code> class.</p>
                                <p><span class="inner-heading">Submit Usage: </span>Submit will be used to submit new data. So a user can fill out a form that has never been filled out before and submit the data. Submit will always be paired with "Cancel"</p>
                                <p><span class="inner-heading">Save Usage: </span>Save will be used to save existing information. So saving an edit, for example. Save will always be paired with "Close" </p>


                            </div>
                    </div>
                </div>
            </div>
       
        <div class="spacer"></div>
        
  
            <div class="row">
                <div class="col-sm-12">

                    <div class="row">

                        <div class="col-md-12">
                           <h1 class="sub-category">Cancel vs. Close</h1>
                            <h3>Example</h3>

                         <button type="button" class="btn btn-link">Cancel</button>
                         <button type="button" class="btn btn-link">Close</button> 
                            
                            <h3>Example #2</h3>

                         <button type="button" class="btn btn-action">Submit</button>
                         <button type="button" class="btn btn-link">Cancel</button> 
                            
                            <h3>Example #3</h3>

                         <button type="button" class="btn btn-primary">Save</button>
                         <button type="button" class="btn btn-link">Cancel</button>
                            
                            <h3>Example #4</h3>

                         <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button>
                         <button type="button" class="btn btn-primary">Save</button>
                         <button type="button" class="btn btn-link">Close</button> 




                        </div>
                    </div>
                <div class="spacer"></div>
                    <div class="row"> 
                            <div class="col-md-6">
                                <pre class="brush: html">
                          <button type="button" class="btn btn-link">Cancel</button>
                         <button type="button" class="btn btn-link">Close</button>
                                </pre>
                            </div>
                            <div class="col-md-6">
                                <h3 class="notes">Notes</h3>
                                <p>Cancel and Close buttons will use <code>btn-link</code> class.</p>
                                <p><span class="inner-heading">Cancel Usage: </span>Cancel is used to nullify a new edit, submission or new data creation.</p>
                                <p><span class="inner-heading">Close Usage: </span>Close is meant to close a modal of content. An 'x' at the top right corner can also be found in lieu of a close button.</p>


                            </div>
                    </div>
                </div>
            </div>
            
       
    <div class="spacer"></div>
        
        <div id="dropdown_select">
            <div class="row">
              <div class="col-md-12">
                <h1>Dropdown Select Menu</h1>
                  <h3>Example</h3>
             
                    <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Select Option <span class="caret"></span></button>
                        <ul class="dropdown-menu pull-center pull-top">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#" class="disabled">Disabled action here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        
            <div class="spacer"></div>
        
            <div class="row"> 
                <div class="col-md-6">
                    <pre class="brush: html">
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Select Option <span class="caret"></span></button>
                            <ul class="dropdown-menu pull-center pull-top">
                              <li><a href="#">Action</a></li>
                              <li><a href="#">Another action</a></li>
                              <li><a href="#" class="disabled">Disabled action here</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        
                    </pre>
                </div>
                <div class="col-md-6">
                    <h3 class="notes">Dropdown Select Menu</h3>
                    <p><span class="inner-heading">Usage: </span>Select options</p>
                    <p><span class="inner-heading">Interactions: </span>The dropdown will have multiple selections to select from. The selections are links and will lead the user to an internal (same page) link or external (new page) link. 
                    <p><span class="inner-heading">Colors: </span>Color will take on primary blue. List items in select dropdown will take on the link blue color. If the link is disabled, it will be gray and italicized. </p>
                    <p><span class="inner-heading important">Special Rules: </span>Only actionable items can be listed in a dropdown. Dropdown select cannot be used for a list of items that is just used for information display.</p>
                    <!--<p><span class="inner-heading">Size: </span></p>-->
                </div>
            </div>
          </div>
        
        <div class="spacer"></div>
        
   
            <div class="row">
              <div class="col-md-12">
                <h1 class="sub-category">Grouping Select Menu</h1>
                  <h3>Example</h3>
             
                    <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Select Option <span class="caret"></span></button>
                        <ul class="dropdown-menu pull-center pull-top">
                          <li class="group-label">Group 1</li>
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li class="group-label">Group 2</li>
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li class="group-label">Group 3</li>
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#" class="disabled">Disabled action here</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        
            <div class="spacer"></div>
        
            <div class="row"> 
                <div class="col-md-6">
                    <pre class="brush: html">
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Select Option <span class="caret"></span></button>
                            <ul class="dropdown-menu pull-center pull-top">
                              <li class="group-label">Group 1</li>
                              <li><a href="#">Action</a></li>
                              <li><a href="#">Another action</a></li>
                              <li class="group-label">Group 2</li>
                              <li><a href="#">Action</a></li>
                              <li><a href="#">Another action</a></li>
                              <li class="group-label">Group 3</li>
                              <li><a href="#">Action</a></li>
                              <li><a href="#">Another action</a></li>
                              <li><a href="#" class="disabled">Disabled action here</a></li>
                            </ul>
                        </div>

                        
                    </pre>
                </div>
                <div class="col-md-6">
                    <h3 class="notes">Grouping Select Menu Options</h3>
                    <p><span class="inner-heading">Usage: </span>If the options in the select menu have a hierarchy</p>
                    <p><span class="inner-heading">Interactions: </span>Allows users to find the option they want quicker by scanning the group labels instead of every single option. Users won’t be able to select the group labels. They’re only there to give the menu hierarchy and make scanning options easier. Accessibility users also won’t confuse group labels as options because screen readers can’t read them.
                    <p><span class="inner-heading">Colors: </span>The group labels with be light gray, #949494</p>
                    <!--<p><span class="inner-heading">Size: </span></p>-->
                </div>
            </div>
         
        
        <div class="spacer"></div>
        
        
        <div class="row">
              <div class="col-md-12">
                <h1 class="sub-category">Select Menu Labels</h1>
                  <h3>Example</h3>
             
                    <div class="dropdown-label">Label</div>
                    <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-default" aria-expanded="true">Label <span class="caret"></span></button>
                        <ul class="dropdown-menu pull-center pull-top">
                          <li class="group-label">Group 1</li>
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li class="group-label">Group 2</li>
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li class="group-label">Group 3</li>
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#" class="disabled">Disabled action here</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        
            <div class="spacer"></div>
        
            <div class="row"> 
                <div class="col-md-6">
                    <pre class="brush: html">
                         <div class="dropdown-label">Label</div>
                         <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Label <span class="caret"></span></button>
                            ...
                         </div>

                        
                    </pre>
                </div>
                <div class="col-md-6">
                    <h3 class="notes">Select Menu Labels</h3>
                    <p><span class="inner-heading">Usage: </span>The label for the dropdown will appear above the dropdown select as well as the default element listed in the dropdown select. </p>
                    <p><span class="inner-heading">Interactions: </span>No interaction.</p>
                    <!--<p><span class="inner-heading">Colors: </span>#5D5D5D</p>
                    <p><span class="inner-heading">Size: </span></p>-->
                </div>
            </div>
         
        
        <div class="spacer"></div>
        
        
        <div class="row">
              <div class="col-md-12">
                <h1 class="sub-category">Header Dropdown Select</h1>
                  <h3>Example</h3>

                  
                  <ul class="nav navbar-top-links">
                   
                    <li class="dropdown main" dropdown="">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-user dark-gray"></em> Welcome, User <strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                             <li><a href="#" class=""><i class="fa fa-suitcase fa-fw"></i> Action</a></li>
                             <li><a href="#" class=""><i class="fa fa-file-text-o fa-fw"></i> Action</a></li>
                             <li><a href="#" class="logout"><i class="fa fa-sign-out fa-fw"></i> Action</a></li>
                            </ul>
                     </li>
                    </ul>
                  
                </div>
            </div>
        
            <div class="spacer"></div>
        
            <div class="row"> 
                <div class="col-md-6">
                    <pre class="brush: html">
                         <ul class="nav navbar-top-links">
                            <li class="dropdown main" dropdown="">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-user dark-gray"></em> Welcome, User <strong class="caret"></strong></a>
                                    <ul class="dropdown-menu">
                                     <li><a href="#" class=""><i class="fa fa-suitcase fa-fw"></i> Action</a></li>
                                     <li><a href="#" class=""><i class="fa fa-file-text-o fa-fw"></i> Action</a></li>
                                     <li><a href="#" class="logout"><i class="fa fa-sign-out fa-fw"></i> Action</a></li>
                                    </ul>
                             </li>
                    </ul>

                        
                    </pre>
                </div>
                <div class="col-md-6">
                    <h3 class="notes">Header User Dropdown Select</h3>
                    <p><span class="inner-heading">Usage: </span>User access to Settings, Terms of Service, and Logout</p>
                    <p><span class="inner-heading">Interactions: </span>Dropdown select to access these options. On hover, the link gains a light gray background color: #EEEEEE. </p>
                    <p><span class="inner-heading">Colors: </span></p>
                    <p><span class="inner-heading">Special Notes: </span>The dropdown style is different from the default dropdown style to signify prominence in its' placement in the header with a different look and feel. It interacts the same way as the default dropdown. </p>
                    
                </div>
            </div>
         
        
        <div class="spacer"></div>
        
        <div id="progress">
            <div class="row">
              <div class="col-md-12">
                <h1>Progress Indicator</h1>
                  <h3>Example</h3>
                  <p>Progress Spinner: <i class="fa fa-spinner fa-spin"></i></p>
                </div>
            </div>
        
            <div class="spacer"></div>
        
            <div class="row"> 
                <div class="col-md-6">
                    <pre class="brush: html">
                        <i class="fa fa-spinner fa-spin"></i>
                    </pre>
                </div>
                <div class="col-md-6">
                    <h3 class="notes">Notes</h3>
                    <p>The spinner is visible when data is loading anywhere on the dashboard. </p>

                </div>
            </div>
          </div>
        
        
        <div class="spacer"></div>
        
        <!--<div id="submission">
            <div class="row">
              <div class="col-md-12">
                <h1>Form Submission Messages</h1>
                  <h3>Example</h3>
                
                </div>
            </div>
        
            <div class="spacer"></div>
        
            <div class="row"> 
                <div class="col-md-6">
                    <pre class="brush: html">

                    </pre>
                </div>
                <div class="col-md-6">
                    <h3 class="notes">Notes</h3>
                    <p>Notes go here.</p>

                </div>
            </div>
          </div>-->
        

    </div>
    </div>
</div>