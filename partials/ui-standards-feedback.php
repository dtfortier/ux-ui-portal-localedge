<div id="le-dash">
    <div class="container">

        <ul class="nav nav-pills">
          <li role="presentation" class="active"><a href="#error-messages">Error Messages</a></li>
          <li role="presentation"><a href="#popovers">Popovers</a></li>
          <li role="presentation"><a href="#tooltips">Tooltips</a></li>    
          <!--<li role="presentation"><a href="#section2">Helper Info</a></li>
          <li role="presentation"><a href="#section3">Modals</a></li>-->   
        </ul>
        
        
    <div class="col-sm-12 blog-main">
        
     <div id="error-messages">
            <div class="row">
              <div class="col-md-12">
                <h1>Error Messages</h1>
                  <h3>Example</h3>
                  
                  <img src="<?php bloginfo('template_url'); ?>/img/login-error2.png" alt="Login Error" height="176" width="435"/>  
                 
                <!--  <form id="fm1" class="field-inputs" action="#" method="post">
                    <p id="status" class="error">The user name and password are not valid.</p>
                        <div class="form-group">
                            <div class="icon-addon addon-lg">

                                <input id="username" name="username" placeholder="Username" class="form-control" type="text" value="" maxlength="200">
                               <i class="fa fa-user fa-fw"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="icon-addon addon-lg">
                                <input id="password" name="password" placeholder="Password" class="form-control" type="password" value="">
                               <i class="fa fa-lock fa-fw"></i>
                            </div>
                        </div>
                        <div class="form-inline">
                            <div class="submit-section">
                                <div class="forgot-password">
                                    <a href="#" class="le-login-forgot-password">Forgot Password?</a>
                                </div>
                                <div class="submit-button">
                                    <input type="hidden" name="lt" value="e1s2">
                                    <input type="hidden" name="_eventId" value="submit">
                                    <input type="submit" name="submit" value="Login" class="btn le-submit-button" id="cas-login-submit">
                                </div>
                            </div>
                        </div>
                    </form> -->
                  
                
                </div>
            </div>
        
           <div class="spacer"></div>
        
           <div class="row"> 
                <div class="col-md-6">
                    <pre class="brush: html">
                        <p id="status" class="error">The user name and password are not valid.</p>
                    </pre>
                </div>
                <div class="col-md-6">
                    <h3 class="notes">Notes</h3>
                    <p><span class="inner-heading">Usage: </span>To show users which information was submitted incorrectly.</p>
                    <p><span class="inner-heading">Interactions: </span>When a user types their information in wrong and click submit, the screen will remain at login with the error message about the field with the wrong information.</p>
                    <p><span class="inner-heading">Colors: </span>The text color is "alerts red", #E84242.Font size is 14px.</p>
                    <p><span class="inner-heading">Specific Formatting: </span>The error message will always show below the input with the invalid information error. </p>
             
                </div>
            </div>
        </div>
        
    <div class="spacer"></div>
        
         <div id="popovers">
                <div class="row">
                  <div class="col-md-12">
                    <h1>Popovers</h1>
                      <h3>Example</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-9">

                                <a tabindex="0" class="btn btn-lg btn-primary" role="button" data-toggle="popover" data-trigger="hover"  data-placement="bottom" data-content="This is content that shows up in a popover.">Popover</a>

                            </div>
                        </div>

                 
                      
                      
                      

                    </div>
                </div>

              <div class="spacer"></div>

              <div class="row"> 
                    <div class="col-md-6">
                        <pre class="brush: html">
                            <button type="button" class="toolTip" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="This is content that shows up in a popover."><i class="fa fa-question-circle"></i></button>
                        
                        
                        </pre>
                    </div>
                    <div class="col-md-6">
                        <h3 class="notes">Notes</h3>
                        <p>ACTION: Hover over the button to get the popover.</p>
                        <p><code>data-placement</code> will always be defined as <code>bottom</code>.</p>
                    
                        

                    </div>
                </div>
           
        
    <div class="spacer"></div>
        
      <div id="tooltips">
                <div class="row">
                  <div class="col-md-12">
                    <h1>Tooltips</h1>
                      <h3>Example</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="block">
                                    <div class="heading"><h3>Test Block 
                                        <span><a tabindex="0" class="toolTip" role="button" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="This is content that shows up in a popover.">
                                            <i class="fa fa-question-circle"></i>
                                        </a></span>
                                        </h3>
                                    </div>
                                        <div class="wrap">
                                            <p>test content</p>
                                        </div>
                                </div>
                            </div>
                              <div class="col-md-6">
                                <div class="block">
                                    <div class="heading"><h3>Test Block 
                                        <span><a tabindex="0" class="toolTip" role="button" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="This is content that shows up in a popover.">
                                            <i class="fa fa-question-circle"></i>
                                            </a></span>
                                        </h3>
                                    </div>
                                        <div class="wrap">
                                            <p>test content</p>
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
                            <div class="heading"><h3>Test Block 
                                        <span><a tabindex="0" class="toolTip" role="button" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="This is content that shows up in a popover.">
                                            <i class="fa fa-question-circle"></i>
                                            </a></span>
                                        </h3>
                                    </div>
                        
                        </pre>
                    </div>
                    <div class="col-md-6">
                        <h3 class="notes">Notes</h3>
                        <p>ACTION: Hover on the tooltip</p>
                        <p>The tooltips in content blocks are used on an "as needed" basis. When a content block uses the tooltip, then it is located in the heading on the far right.
                        The tooltip is a right float with relative positioning to ensure it keeps its' place responsively. </p>
                        <p>The direction of the report popover will be left: <code>data-placement="bottom"</code> </p>    
                    </div>
                </div>
           
        
    <div class="spacer"></div>
        
         <div class="row">
                  <div class="col-md-12">
                    <h1 class="sub-category">Date Picker Validation Tooltips</h1>
                      <h3>Example</h3>
                        <img class="standards-img" src="<?php bloginfo('template_url'); ?>/img/tooltip-field-required.png" alt="Line Chart" height="155" width="454"/> 
                        <img class="standards-img" src="<?php bloginfo('template_url'); ?>/img/tooltip-data-notavailable.png" alt="Line Chart" height="221" width="265"/>  
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
                         <p><span class="inner-heading">Usage: </span>Date picker field validation and dates unavailable</p>
                            <p><span class="inner-heading">Interactions: </span>When a user types in an invalid date, a black tooltip will appear above the field with the message: "Please end a valid start date". When a user does not enter a date at all, upon Submit or a selected click inside the next date field, a black tooltip will appear above the field with the message: "This field is required." </p>
                            <p>When a user clicks on the calendar icon date picker, a calendar will appear. The greyed out dates mean they are not available to select. When the user hovers over these dates, a red tooltip will appear with the message: "Data not available"</p>
                            <p><span class="inner-heading">Colors: </span></p>
                            <p><span class="inner-heading">Specific Formatting: </span></p>
                         
                    </div>
                </div>
           
        
    <div class="spacer"></div>
        
     <!--   <div id="section2">
                <div class="row">
                  <div class="col-md-12">
                    <h1>Helper Info</h1>
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
            </div>
        
    <div class="spacer"></div>
        
        <div id="section3">
            <div class="row">
              <div class="col-md-12">
                <h1>Modals</h1>
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
               
                   

            </div>
           </div>
         </div> -->
      

    </div>
    </div>
</div>