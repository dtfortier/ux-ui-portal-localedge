<div id="le-dash">
    <div class="container">

        <ul class="nav nav-pills">
          <li role="presentation" class="active"><a href="#headernav">Header Navigation</a></li>
          <li role="presentation"><a href="#sidenav">Side Navigation</a></li>
          <li role="presentation"><a href="#quickstats">Quick Stats Tabs / Filters</a></li>    
        </ul>
        
        
    <div class="col-sm-12 blog-main">
        
     <div id="headernav">
            <div class="row">
              <div class="col-md-12">
                <h1>Header Navigation</h1>
                  <h3>Example</h3>
                    <div class="row">
                  <nav class="navbar navbar-default" role="navigation" ><!--navbar-static-top-->
                     <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                      </button>
                      
                     </div>
 
                      <!-- Top Menu Items -->
                      <ul class="nav navbar-top-links"> <!--navbar-right-->
                       <li><a href=""><i class="fa fa-home fa-lg dark-gray"></i> Home</a></li>
                       <li><a href=""><i class="fa fa-envelope dark-gray"></i> Inbox</a></li>
                       <li><a href="#"><i class="fa fa-comments fa-lg dark-gray"></i> Support</a></li>
                       <li class="dropdown main" dropdown="">
                        <a href="" class="dropdown-toggle" dropdown-toggle="" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user dark-gray"></i> Welcome, User <strong class="caret"></strong></a>
                        <ul class="dropdown-menu">
                         <li><a href="#" class="special" ng-click="open()"><i class="fa fa-suitcase fa-fw"></i> Change Account</a></li>
                         <li><a href=""><i class="fa fa-cog fa-fw dark-gray"></i> Settings</a></li>
                         <li><a href="" target="_blank"><i class="fa fa-fw fa fa-file-text-o dark-gray"></i> Terms &amp; Conditions</a></li>
                         <li><a class="logout" href=""><i class="fa fa-sign-in fa-fw white"></i> Logout</a></li>                   
                        </ul>
                       </li>
                      </ul>
                        </nav>
                    </div>
                </div>
            </div>
        
           <div class="spacer"></div>
        
           <div class="row"> 
                <div class="col-md-6">
                    <pre class="brush: html">
                        <nav class="navbar navbar-default navbar-static-top" role="navigation" >
                     <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                      </button>
                      
                     </div>
 
                      <!-- Top Menu Items -->
                      <ul class="nav navbar-top-links navbar-right"> 
                       <li><a href=""><i class="fa fa-home fa-lg dark-gray"></i> Home</a></li>
                       <li><a href=""><i class="fa fa-envelope dark-gray"></i> Inbox</a></li>
                       <li><a href="#"><i class="fa fa-comments fa-lg dark-gray"></i> Support</a></li>
                       <li class="dropdown main" dropdown="">
                        <a href="" class="dropdown-toggle" data-toggle="" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user dark-gray"></i> Welcome, User <strong class="caret"></strong></a>
                        <ul class="dropdown-menu">
                         <li><a href="#" class="special"><i class="fa fa-suitcase fa-fw"></i> Change Account</a></li>
                         <li><a href=""><i class="fa fa-cog fa-fw dark-gray"></i> Settings</a></li>
                         <li><a href="" target="_blank"><i class="fa fa-fw fa fa-file-text-o dark-gray"></i> Terms &amp; Conditions</a></li>
                         <li><a class="logout" href=""><i class="fa fa-sign-in fa-fw white"></i> Logout</a></li>                   
                        </ul>
                       </li>
                      </ul>
                        </nav>
                    </pre>
                </div>
                <div class="col-md-6">
                    <h3 class="notes">Notes</h3>
                    <p>Notes go here.</p>
             
                </div>
            </div>
        </div>
        
    <div class="spacer"></div>
        
        <div id="sidenav">
            <div class="row">
              <div class="col-md-12">
                <h1>Side Navigation</h1>
                  <h3>Example</h3>
                <img src="<?php bloginfo('template_url'); ?>/img/left-nav.png" alt="Login Error" height="701" width="251"/>
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
                <p>The side navigation is using accordian functionality to navigate the links. The Parent, Children and Children's child links are each a different shade of blue-gray.</p>
                <p>TOP PARENT BACKGROUND COLOR: <code>#4C5965</code></p>
                <p>CHILD BACKGROUND COLOR: <code>#364049</code></p>
                <p>CHILD'S CHILD BACKGROUND COLOR: <code>#323538</code></p>
                <p>The parent link color is white <code>#ffffff</code>. The child link color is <code>#AFADAD</code>. When the parent link is hovered, the background turns blue, <code>#447DB3</code> and the link remains white. When the child link is hovered, the background turns a lighter gray, <code>#AFADAD</code> and the link turns white. When the child's child link is hovered, the background turns blue, <code>#447DB3</code> and the link turns white. </p>

            </div>
           </div>
         </div>
        
    <div class="spacer"></div>
      <div id="quickstats">
        <div class="row">
          <div class="col-md-12">
            <h1>Quick Stats</h1>
              <h3>Example</h3>
                <div class="row">
                        <div class="col-md-3">
                            <div class="quickstat">
                                <div class="wrap">
                                    <div class="title">Leads
                                        <button type="button" class="toolTip" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="The leads quick stat shows the total count of the leads delivered and the cost of each lead i.e. Cost Per Lead (CPL) for the date range selected."><i class="fa fa-question-circle"></i></button>
                                       
                                    </div>
                                   <!--<div class="desc">Words</div>-->
                                    <div class="icon-wrap">
                                        <div class="icon"><i class="fa fa-cogs"></i></div>
                                    </div>
                                    <div class="summary">
                                        <div class="summaryTitle"></div>
                                        <div class="summaryValue">5,102</div>
                                    </div>
                                    <div class="summary subSummary">
                                        <div class="summaryTitle">CPL:</div>
                                        <div class="summaryValue">$2.41</div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                         <div class="col-md-3">
                                <div class="quickstat">
                                    <div class="wrap">
                                        <div class="title">Leads  
                                            <button type="button" class="toolTip" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="The leads quick stat shows the total count of the leads delivered and the cost of each lead i.e. Cost Per Lead (CPL) for the date range selected."><i class="fa fa-question-circle"></i></button>
                                        </div>
                                        <!--<div class="desc">Words</div>-->
                                        <div class="icon-wrap">
                                            <div class="icon"><i class="fa fa-cogs"></i></div>
                                        </div>
                                        <div class="summary">
                                            <div class="summaryTitle"></div>
                                            <div class="summaryValue">5,102</div>
                                        </div>
                                        <div class="summary subSummary">
                                            <div class="summaryTitle">CPL:</div>
                                            <div class="summaryValue">$2.41</div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                         <div class="col-md-3">
                            <div class="quickstat">
                                <div class="wrap">
                                    <div class="title">Leads
                                       <button type="button" class="toolTip" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="The leads quick stat shows the total count of the leads delivered and the cost of each lead i.e. Cost Per Lead (CPL) for the date range selected."><i class="fa fa-question-circle"></i></button>
                                    </div>
                                    <!--<div class="desc">Words</div>-->
                                    <div class="icon-wrap">
                                        <div class="icon"><i class="fa fa-cogs"></i></div>
                                    </div>
                                    <div class="summary">
                                        <div class="summaryTitle"></div>
                                        <div class="summaryValue">5,102</div>
                                    </div>
                                    <div class="summary subSummary">
                                        <div class="summaryTitle">CPL:</div>
                                        <div class="summaryValue">$2.41</div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                         <div class="col-md-3">
                            <div class="quickstat">
                                <div class="wrap">
                                    <div class="title">Leads
                                        <button type="button" class="toolTip" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="The leads quick stat shows the total count of the leads delivered and the cost of each lead i.e. Cost Per Lead (CPL) for the date range selected."><i class="fa fa-question-circle"></i></button>
                                    </div>
                                    <!--<div class="desc">Words</div>-->
                                    <div class="icon-wrap">
                                        <div class="icon"><i class="fa fa-cogs"></i></div>
                                    </div>
                                    <div class="summary">
                                        <div class="summaryTitle"></div>
                                        <div class="summaryValue">5,102</div>
                                    </div>
                                    <div class="summary subSummary">
                                        <div class="summaryTitle">CPL:</div>
                                        <div class="summaryValue">$2.41</div>
                                    </div>
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
                <div class="col-md-3">
                            <div class="quickstat">
                                <div class="wrap">
                                    <div class="title">Leads
                                        <a href="#" class="toolTip" data-toggle="tooltip" title="The leads quick stat shows the total count of the leads delivered and the cost of each lead i.e. Cost Per Lead (CPL) for the date range selected."><i class="fa fa-question-circle"></i></a>
                                    </div>
                                   <!--<div class="desc">Words</div>-->
                                    <div class="icon-wrap">
                                        <div class="icon"><i class="fa fa-cogs"></i></div>
                                    </div>
                                    <div class="summary">
                                        <div class="summaryTitle"></div>
                                        <div class="summaryValue">5,102</div>
                                    </div>
                                    <div class="summary subSummary">
                                        <div class="summaryTitle">CPL:</div>
                                        <div class="summaryValue">$2.41</div>
                                    </div>
                                </div>
                            </div>    
                        </div>
            </pre>
        </div>
        <div class="col-md-6">
            <h3 class="notes">Quick Stats Notes</h3>
            <p>Quickstats are filters in SEO and tabs everywhere else on the dashboard. We will be incorporating the 
            same styles to wrap those stat blocks. </p>
            <p>Quickstats will be surrounded by class <code>.quickstat</code>, whether it's a tab or a filter.</p>
            <p>"Popovers" are also displayed here, as a tool tip. When you hover over the question mark in the top right of the quickstats,
            a popover of information will appear at the <code>bottom</code> of the quick stat. To close it, simply move the cursor away from the bubble. More information on 
            the popover can be found <a href="http://uxui.localedge.com/ui-standards/feedback/#popovers">here.</a></p>
            
        </div>
       </div>
     </div>

    <div class="spacer"></div>

    </div>
    </div>
</div>