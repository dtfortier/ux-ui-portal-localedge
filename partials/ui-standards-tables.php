<div id="le-dash">
    <div class="container">

        <ul class="nav nav-pills">
          <li role="presentation" class="active"><a href="#report-table">Report Table</a></li>
          <li role="presentation"><a href="#pagination">Pagination</a></li>
          <li role="presentation"><a href="#view-all">View All</a></li>
          <li role="presentation"><a href="#tables-modals">Tables in Modals</a></li>
          <!--<li role="presentation"><a href="#tables-sortable">Sortable Tables</a></li>    -->
        </ul>
        
    
        
    <div class="col-sm-12 blog-main">
        <div id="report-table">
            <div class="row">
              <div class="col-md-12">
                <h1>Reports Table</h1>
                  <h3>Example</h3>
              <div class="block">
                   <h3 class="reportTitle">Report Title</h3>
                       
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>

                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>
                                  <tr>

                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                  </tr>
                                  <tr>

                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                  </tr>
                                </tbody>
                              </table>
                            <div class="report-footer"></div>
                        
                    </div>    
                </div>
            </div>
        </div>
        <div class="spacer"></div>
        
          <div class="row"> 
                <div class="col-md-6">
                    <pre class="brush: html">
                         <div class="report wrap">
                        <h3 class="reportTitle">Report Title</h3>
                      <table class="table">
                        <thead>
                          <tr>

                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>

                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>

                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>

                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="report-footer"></div>
                    </div>
                    </pre>
                </div>
                   <div class="col-md-6">
                    <h3 class="notes">Notes</h3>
                    <p><span class="inner-heading">Usage: </span>Displays data based on date picker and quick stat. </p>
                    <p><span class="inner-heading">Interactions: </span></p>
                    <p><span class="inner-heading">Colors: </span>Reports are surrounded in content blocks, #EDECED. The inner table cells background color is #F9F9F9. </p>
                    <p><span class="inner-heading">Specific Formatting: </span> Only horizontal row dividers, no vertical column dividers.</p>
             
                </div>
            </div>
        <div class="spacer"></div>
        
        <div id="pagination">
            <div class="row">
                  <div class="col-md-12">
                    <h1>Reports Table with Pagination (full width table)</h1>
                      <h3>Example</h3>
                      <div class="report wrap">
                            <h3 class="reportTitle">Report Title</h3>
                          <table class="table">
                            <thead>
                              <tr>

                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>External Link</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>

                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>

                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>

                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                              </tr>
                            </tbody>
                          </table>
                            <div class="report-footer">
                                <nav>
                                    <ul class="pagination">
                                        <li><a href="#" aria-label="Previous"><span aria-hidden="true">Previous</span></a></li>
                                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
                                   </ul>
                                </nav>
                            </div>
                        </div>   
                    </div>
            </div>
        </div>
        <div class="spacer"></div>
        
          <div class="row"> 
                <div class="col-md-6">
                    <pre class="brush: html">
                   
                        
                        
                      <!-- </table> ends here -->
                    <div class="report-footer">
                            <nav>
                                <ul class="pagination">
                                    <li><a href="#" aria-label="Previous"><span aria-hidden="true">Previous</span></a></li>
                                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
                               </ul>
                            </nav>
                        </div>
                        
                   
                    </pre>
                </div>
                <div class="col-md-6">
                    <h3 class="notes">Notes</h3>
                   
                    
                    <p><span class="inner-heading">Usage: </span>Navigating through data, 10 items at a time.</p>
                    <p><span class="inner-heading">Interactions: </span>Click on the page number, Next or Previous and find data on the desired page. </p>
                    <p><span class="inner-heading">Colors: </span>Each pagination button has a background color of #fff. The number/link color is #909FAC. When hovering or active, the text will be white (#fff) with blue background (#447DB3).</p>
                    <p><span class="inner-heading important">Rules: </span>Only show 3 page numbers at a time.</p>
                    

                    <p><span class="inner-heading">Additional Notes: </span>
                    <p>Pagination is used only in reports that contain icons in a column that opens an external modal. </p>
                    <p>"Submission Details" report in Performance Overview Forms is a prime example of this. </p>
                    <p>Pagination is also used in modals that are accessed by the View All link in long listed reports.</p>
             
                </div>
            </div>
        <div class="spacer"></div>
        
        
      
            <div class="row">
                  <div class="col-md-12">
                    <h1 class="sub-category">Table with Pagination (50% width or less)</h1>
                      <h3>Example</h3>
                  </div>
                    <div class="col-md-6">
                      <div class="report wrap">
                            <h3 class="reportTitle">Report Title</h3>
                          <table class="table">
                            <thead>
                              <tr>

                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>External Link</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>

                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>

                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>

                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                              </tr>
                             <tr>

                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>

                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>

                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                              </tr>    
                            </tbody>
                          </table>
                            <div class="report-footer">
                                <nav>
                                    <ul class="pagination">
                                        <li><a href="#" aria-label="Previous"><span aria-hidden="true">Previous</span></a></li>
                                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
                                   </ul>
                                </nav>
                            </div>
                        </div>   
                    </div>
            </div>
       
        <div class="spacer"></div>
        
          <div class="row"> 
                <div class="col-md-6">
                    <pre class="brush: html">
                   
                        
                        
                      <!-- </table> ends here -->
                    <div class="report-footer">
                            <nav>
                                <ul class="pagination">
                                    <li><a href="#" aria-label="Previous"><span aria-hidden="true">Previous</span></a></li>
                                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
                               </ul>
                            </nav>
                        </div>
                        
                   
                    </pre>
                </div>
                <div class="col-md-6">
                    <h3 class="notes">Notes</h3>
                   
                    <p>Refer to Pagination notes. Takes on the same rules.</p>
             
                </div>
            </div>
        <div class="spacer"></div>
        
        
        
        
        
        <div id="view-all">
            <div class="row">
                  <div class="col-md-12">
                    <h1>Reports Table with View All link</h1>
                      <h3>Example</h3>
                  <div class="report wrap">
                            <h3 class="reportTitle">Report Title</h3>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>

                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>

                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>

                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                              </tr>
                            </tbody>
                          </table>
                            <div class="report-footer"><a href="">View All</a></div>
                        </div>    
                    </div>
                </div>
            </div>
        <div class="spacer"></div>
         
              <div class="row"> 
                    <div class="col-md-6">
                        <pre class="brush: html">
                        <!-- </table> ends here -->
                          <div class="report-footer"><a href="">View All</a></div>
                        </pre>
                    </div>
                    <div class="col-md-6">
                        <h3 class="notes">Notes</h3>
                        <p><span class="inner-heading">Usage: </span>Navigating through data, 10 items at a time.</p>
                    <p><span class="inner-heading">Interactions: </span>Click on the View All link, opens a modal with all the content in that table. The modal has pagination to navigate through the data.</p>
                    <p><span class="inner-heading">Colors: </span>View All link is standard defined, blue. #447DB3</p>
                    <p><span class="inner-heading">Specific Formatting: </span></p>
                    

                    <p><span class="inner-heading">Additional Notes: </span>
                        <p>The View All link is used in reports that have more that 10 rows of content. This discludes reports that contain an external link in the report as those reports will utilize pagination instead.</p>

                    </div>
            </div>
       
        <div class="spacer"></div>
        
        
        
        
        
        <div id="tables-modals">
        <div class="row">
              <div class="col-md-12">
                <h1>Reports Table in a modal</h1>
                  <h3>Example</h3>
              
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tablesModalLg">Large</button>
                  
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tablesModalMed">Medium</button>
                  
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tablesModalSm">Small</button>
                  
                  <div class="modal fade" id="tablesModalLg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close modalClose" data-dismiss="modal" aria-label="Close">                                 <span aria-hidden="true">&times;</span>
                            </button>
                          <h4 class="modal-title">Modal title</h4>
                          </div>
                          <div class="modal-body">
                                <div class="panel panel-default">
                                    <table class="table">
                                        <thead class="no-border">
                                            <tr>
                                                <th>LE Account</th>
                                                <th>Account Number</th>
                                                <th>Address</th>
                                                <th>Phone Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="select">

                                                <td>Aesthetic Center for Plastic Surgery</td>
                                                <td>324517</td>
                                                <td>12727 Kimberley Suite 300 Houston, TX</td>
                                                <td>(281) 407-0281</td>
                                            </tr>
                                            <tr class="select">

                                                <td>Aesthetic Center for Plastic Surgery - Dr. Fortes</td>
                                                <td>324517</td>
                                                <td>12727 Kimberley Suite 300 Houston, TX</td>
                                                <td>(713) 799-9999</td>
                                            </tr>
                                            <tr class="select">

                                                <td>Aesthetic Center for Plastic Surgery - Dr. Morales</td>
                                                <td>324517</td>
                                                <td>12727 Kimberley Suite 300 Houston, TX</td>
                                                <td>(281) 407-0281</td>
                                            </tr>
                                            <tr class="select">

                                                <td>Aesthetic Center for Plastic Surgery - Dr. Morales</td>
                                                <td>324517</td>
                                                <td>12727 Kimberley Suite 300 Houston, TX</td>
                                                <td>(281) 407-0281</td>
                                            </tr>
                                            <tr class="select">

                                                <td>Aesthetic Center for Plastic Surgery - Dr. Morales</td>
                                                <td>324517</td>
                                                <td>12727 Kimberley Suite 300 Houston, TX</td>
                                                <td>(281) 407-0281</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <nav>
                                    <ul class="pagination">
                                        <li><a href="#" aria-label="Previous"><span aria-hidden="true">Previous</span></a></li>
                                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
                                   </ul>
                                </nav>
                            </div>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                  
                    <div class="modal fade" id="tablesModalMed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog med">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close modalClose" data-dismiss="modal" aria-label="Close">                                 <span aria-hidden="true">&times;</span>
                            </button>
                          <h4 class="modal-title">Modal title</h4>
                          </div>
                          <div class="modal-body">
                                <div class="panel panel-default">
                                    <table class="table">
                                        <thead class="no-border">
                                            <tr>
                                                <th>LE Account</th>
                                                <th>Account Number</th>
                                                <th>Address</th>
                                                <th>Phone Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="select">

                                                <td>Aesthetic Center for Plastic Surgery</td>
                                                <td>324517</td>
                                                <td>12727 Kimberley Suite 300 Houston, TX</td>
                                                <td>(281) 407-0281</td>
                                            </tr>
                                            <tr class="select">

                                                <td>Aesthetic Center for Plastic Surgery - Dr. Fortes</td>
                                                <td>324517</td>
                                                <td>12727 Kimberley Suite 300 Houston, TX</td>
                                                <td>(713) 799-9999</td>
                                            </tr>
                                            <tr class="select">

                                                <td>Aesthetic Center for Plastic Surgery - Dr. Morales</td>
                                                <td>324517</td>
                                                <td>12727 Kimberley Suite 300 Houston, TX</td>
                                                <td>(281) 407-0281</td>
                                            </tr>
                                            <tr class="select">

                                                <td>Aesthetic Center for Plastic Surgery - Dr. Morales</td>
                                                <td>324517</td>
                                                <td>12727 Kimberley Suite 300 Houston, TX</td>
                                                <td>(281) 407-0281</td>
                                            </tr>
                                            <tr class="select">

                                                <td>Aesthetic Center for Plastic Surgery - Dr. Morales</td>
                                                <td>324517</td>
                                                <td>12727 Kimberley Suite 300 Houston, TX</td>
                                                <td>(281) 407-0281</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <nav>
                                    <ul class="pagination">
                                        <li><a href="#" aria-label="Previous"><span aria-hidden="true">Previous</span></a></li>
                                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
                                   </ul>
                                </nav>
                            </div>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                  
                  <div class="modal fade" id="tablesModalSm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close modalClose" data-dismiss="modal" aria-label="Close">                                 <span aria-hidden="true">&times;</span>
                            </button>
                          <h4 class="modal-title">Modal title</h4>
                          </div>
                          <div class="modal-body">
                                <div class="panel panel-default">
                                    <table class="table">
                                        <thead class="no-border">
                                            <tr>
                                                <th>LE Account</th>
                                                <th>Account Number</th>
                                                <th>Address</th>
                                                <th>Phone Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="select">

                                                <td>Aesthetic Center for Plastic Surgery</td>
                                                <td>324517</td>
                                                <td>12727 Kimberley Suite 300 Houston, TX</td>
                                                <td>(281) 407-0281</td>
                                            </tr>
                                            <tr class="select">

                                                <td>Aesthetic Center for Plastic Surgery - Dr. Fortes</td>
                                                <td>324517</td>
                                                <td>12727 Kimberley Suite 300 Houston, TX</td>
                                                <td>(713) 799-9999</td>
                                            </tr>
                                            <tr class="select">

                                                <td>Aesthetic Center for Plastic Surgery - Dr. Morales</td>
                                                <td>324517</td>
                                                <td>12727 Kimberley Suite 300 Houston, TX</td>
                                                <td>(281) 407-0281</td>
                                            </tr>
                                            <tr class="select">

                                                <td>Aesthetic Center for Plastic Surgery - Dr. Morales</td>
                                                <td>324517</td>
                                                <td>12727 Kimberley Suite 300 Houston, TX</td>
                                                <td>(281) 407-0281</td>
                                            </tr>
                                            <tr class="select">

                                                <td>Aesthetic Center for Plastic Surgery - Dr. Morales</td>
                                                <td>324517</td>
                                                <td>12727 Kimberley Suite 300 Houston, TX</td>
                                                <td>(281) 407-0281</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <nav>
                                    <ul class="pagination">
                                        <li><a href="#" aria-label="Previous"><span aria-hidden="true">Previous</span></a></li>
                                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
                                   </ul>
                                </nav>
                            </div>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                  
                </div>
        </div>
        
        
        <div class="spacer"></div>
        
        <div class="row"> 
                <div class="col-md-6">
                    <pre class="brush: html">
                         <div class="modal fade" id="tablesModalMed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog med">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close modalClose" data-dismiss="modal" aria-label="Close">                                 <span aria-hidden="true">&times;</span>
                            </button>
                          <h4 class="modal-title">Modal title</h4>
                          </div>
                          <div class="modal-body">
                                <div class="panel panel-default">
                                    <table class="table">
                                        <thead class="no-border">
                                            <tr>
                                                <th>LE Account</th>
                                                <th>Account Number</th>
                                                <th>Address</th>
                                                <th>Phone Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="select">

                                                <td>Aesthetic Center for Plastic Surgery</td>
                                                <td>324517</td>
                                                <td>12727 Kimberley Suite 300 Houston, TX</td>
                                                <td>(281) 407-0281</td>
                                            </tr>
                                            <tr class="select">

                                                <td>Aesthetic Center for Plastic Surgery - Dr. Fortes</td>
                                                <td>324517</td>
                                                <td>12727 Kimberley Suite 300 Houston, TX</td>
                                                <td>(713) 799-9999</td>
                                            </tr>
                                            <tr class="select">

                                                <td>Aesthetic Center for Plastic Surgery - Dr. Morales</td>
                                                <td>324517</td>
                                                <td>12727 Kimberley Suite 300 Houston, TX</td>
                                                <td>(281) 407-0281</td>
                                            </tr>
                                            <tr class="select">

                                                <td>Aesthetic Center for Plastic Surgery - Dr. Morales</td>
                                                <td>324517</td>
                                                <td>12727 Kimberley Suite 300 Houston, TX</td>
                                                <td>(281) 407-0281</td>
                                            </tr>
                                            <tr class="select">

                                                <td>Aesthetic Center for Plastic Surgery - Dr. Morales</td>
                                                <td>324517</td>
                                                <td>12727 Kimberley Suite 300 Houston, TX</td>
                                                <td>(281) 407-0281</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <nav>
                                    <ul class="pagination">
                                        <li><a href="#" aria-label="Previous"><span aria-hidden="true">Previous</span></a></li>
                                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
                                   </ul>
                                </nav>
                            </div>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    </pre>
                </div>
                <div class="col-md-6">
                    <h3 class="notes">Notes</h3>
                    
                    
                    <p><span class="inner-heading">Usage: </span>Displays more detailed info from a report if the report contains more than 10 elements of content.</p>
                    <p><span class="inner-heading">Interactions: </span>Click on the View All link, opens the modal with all the content in that table. The modal has pagination to navigate through the data.</p>
                    <p><span class="inner-heading">Colors: </span>The background of the modal is white, #fff. The content is dark gray, #364049.</p>
                    <p><span class="inner-heading">Specific Formatting: </span></p>

                    <p><span class="inner-heading">Additional Notes: </span>
                    <p><code>modal-dialog lg</code>, Large sized modal windows are going to be the most commonly used modal size as it stretches to 90% of the window. 
                    <p><code>modal-dialog med</code>, Medium sized modal windows are used for smaller tables and stretch to 50% of the window. </p>
                    <p><code>modal-dialog sm</code>, Small sized modal windows, are meant for smaller notifications or informational dialogs and stretch to 35% of the window.</p>
                    
                    
                
                </div>
            </div>
        </div>
        
        <div class="spacer"></div>
       <!-- 
        <pre>
            <code class="language-html" data-lang="html">
                <nav>
                    <ul class="pagination">
                        <li><a href="#" aria-label="Previous"><span aria-hidden="true">Previous</span></a></li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
                   </ul>
                </nav>
            </code>
        </pre>-->
        

    </div>
    </div>
</div>