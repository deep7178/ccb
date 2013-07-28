<?php $this->load->view('js/ccb_js');?>
<div id="email_frm" style="width:920px;border:1px solid gray;">
    <form class="email-form-tag">
    <div id="row_one" style="width:920px;display:block;margin-left:10px;margin-right:10px;">
    <table style="align:center;">
      <tr>
        <td>
        <div id="userinfo" style="width:900px;">
          <table style="width:100%;height:200px;">
            <tr><th align="center" valign="top" style="width:100%;background-color:#98AFC7;color:white;">CCB Template</th></tr>
            <tr>
              <td>
                <table style="width:100%;">
                  <tr>
                    <td width="40%" nowrap="nowrap"><span class="label">Bug Id:<em style="color:red ">&nbsp;*</em></span></td>
                    <td width="60%" nowrap="nowrap">
                        <span class="formw">
	                        <input id="bugid"  size="80" type="text" name="bugid" autocomplete="off" value="" autocomplete="off" />
	                    </span>
	                 </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr><td><div class="row dotted-row-horizontal-separator"></div></td></tr>
            <tr><td><div id="rowcss" style="padding-top:2px;"></div></td></tr>
            <tr>
              <td>
                <table style="width:100%;">                 
                  <tr>
                    <td width="40%" nowrap="nowrap"><span class="label">Severity:<em style="color:red ">&nbsp;*</em></span></td>
                    <td width="60%" nowrap="nowrap">
                        <span class="formw">
	                        <input id="severity"  value=""  size="80" type="text" name="severity" autocomplete="off" maxlength="100" />
	                    </span>
	                 </td>
                  </tr>
                </table>
              </td>
            </tr>            
            <tr><td><div class="row dotted-row-horizontal-separator"></div></td></tr>
            <tr><td><div id="rowcss" style="padding-top:2px;"></div></td></tr>
            <tr>
              <td>
                <table style="width:100%;">
                  <tr>
                    <td width="40%" nowrap="nowrap"><span class="label">Small description of the limitation due to this bug:<em style="color:red ">&nbsp;*</em></span></td>
                    <td width="60%" nowrap="nowrap">
                        <span class="formw">
                               <textarea id="small_desc" name="small_desc"  rows="5" cols="60" style="border:1px solid skyblue;"></textarea>
	                </span>
	            </td>
                  </tr>
                </table>
              </td>
            </tr>            
            <tr><td><div class="row dotted-row-horizontal-separator"></div></td></tr>
            <tr><td><div id="rowcss" style="padding-top:2px;"></div></td></tr>
            <tr>            
              <td>
                <table style="width:100%;">
                  <tr>
                    <td width="40%" nowrap="nowrap"><span class="label">Small description of the fix what is changed and how:<em style="color:red ">&nbsp;*</em></span></td>
                    <td width="60%" nowrap="nowrap">
                        <span class="formw">	                        
                                <textarea id="fixed_desc" name="fixed_desc" rows="5" cols="60" style="border:1px solid skyblue;"></textarea>
	                    </span>
	                 </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr><td><div class="row dotted-row-horizontal-separator"></div></td></tr>
            <tr><td><div id="rowcss" style="padding-top:2px;"></div></td></tr>
            <tr>            
              <td>
                <table style="width:100%;">
                  <tr>
                    <td width="40%" nowrap="nowrap"><span class="label">Tests done so far to verify:<em style="color:red ">&nbsp;*</em></span></td>
                    <td width="60%" nowrap="nowrap">
                        <span class="formw">	                        
                                <textarea id="test_done" name="test_done" rows="5" cols="60" style="border:1px solid skyblue;"></textarea>
	                    </span>
	                 </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr><td><div class="row dotted-row-horizontal-separator"></div></td></tr>
            <tr><td><div id="rowcss" style="padding-top:2px;"></div></td></tr>
            <tr>            
              <td>
                <table style="width:100%;">
                  <tr>
                    <td width="40%" nowrap="nowrap"><span class="label">Tests to be done to verify the fix:<em style="color:red ">&nbsp;*</em></span></td>
                    <td width="60%" nowrap="nowrap">
                        <span class="formw">
	                        <textarea id="test_to_be_done" name="test_to_be_done" rows="5" cols="60" style="border:1px solid skyblue;"></textarea>
	                </span>
	             </td>                     
                  </tr>
                </table>
              </td>
            </tr>
            <tr><td><div class="row dotted-row-horizontal-separator"></div></td></tr>
            <tr><td><div id="rowcss" style="padding-top:2px;"></div></td></tr>
            <tr>            
              <td>
                <table style="width:100%;">
                  <tr>
                    <td width="40%" nowrap="nowrap"><span class="label">Code Reviewer:<em style="color:red ">&nbsp;*</em></span></td>
                    <td width="60%" nowrap="nowrap">
                        <span class="formw">
	                        <input id="code_reviewer"  value=""  size="80" type="text" name="code_reviewer" autocomplete="off" maxlength="100" />
	                    </span>
	                 </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr><td><div class="row dotted-row-horizontal-separator"></div></td></tr>
            <tr><td><div id="rowcss" style="padding-top:2px;"></div></td></tr>
            <tr><th align="center" valign="top" style="width:100%;background-color:#98AFC7;color:white;">Send Details</th></tr>
            <tr><td><div id="rowcss" style="padding-top:2px;"></div></td></tr>                                    
            <tr>
              <td>
                <table style="width:100%;">
                  <tr>
                    <td width="40%" nowrap="nowrap"><span class="label">Send to:<em style="color:red ">&nbsp;*</em></span></td>                    	                                                         
                    <td width="60%" nowrap="nowrap">
                        <span class="formw">
	                        <input id="send_to" value="deepak@surelinesystems.com" size="80" type="text" name="send_to" autocomplete="off"  />
	                    </span>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>            
            <tr>
              <td>
                <table style="width:100%;">
                  <tr>
                    <td width="40%" nowrap="nowrap"><span class="label">CC:<em style="color:red ">&nbsp;*</em></span></td>                    	                                                         
                    <td width="60%" nowrap="nowrap">
                        <span class="formw">
	                        <input id="cc" value="" size="80" type="text" name="cc" autocomplete="off"  />
	                    </span>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>            
            <tr><td><div id="rowcss" style="padding-top:2px;"></div></td></tr>
          </table>
        </div>
        </td>       
      </tr>          
    </table>
   </div>
   <div id="show_errors"></div>
    <div id="row_submit" class="rowemail">
    <div class="row dotted-row-horizontal-separator"></div>
        <div id="row_buttons" style="padding-left:380px;padding-top:5px;">
               <button type="button"  class="button white-bg email-submit">Finish</button>
               <button type="button"  class="button white-bg email-test">Reset</button>
	    </div>
	</div>
    <div class="create-sucess-msg" style="display:none; background:url('<?php echo base_url();?>img/right-icon-large.png') no-repeat 5px 10px; padding:25px 60px;">
       <h1>Configured Successfully.</h1>
    </div>
    <div class="test-sucess-msg" style="display:none; background:url('<?php echo base_url();?>img/right-icon-large.png') no-repeat 5px 10px; padding:25px 60px;">
       <h1>Test Mail Sent Successfully.</h1>
    </div>
    <div id="err-msg"></div>         
	<div class="spacer">&nbsp;</div>
   </form>
 </div>