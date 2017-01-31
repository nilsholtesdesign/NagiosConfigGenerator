<?php
/**
 * Created by PhpStorm.
 * User: nilsringersma
 * Date: 31-01-17
 * Time: 14:53
 */


?>




    <div id='frmFormMailContainer'>

        <form name="frmFormMail" id="frmFormMail" target="submitToFrame" action='admin.php' method='post' enctype='multipart/form-data' >

            <input type='hidden' name='formmail_submit' value='Y'>
            <input type='hidden' name='mod' value='ajax'>
            <input type='hidden' name='func' value='submit'>


            <ol class='phpfmg_form' >

                <li class='field_block' id='field_0_div'><div class='col_label'>
                        <label class='form_field'>host_name</label> <label class='form_required' >*</label> </div>
                    <div class='col_field'>
                        <input type="text" name="field_0"  id="field_0" value="<?php  phpfmg_hsc("field_0", ""); ?>" class='text_box'>
                        <div id='field_0_tip' class='instruction'>i.e. s01.holtesdesign.nl</div>
                    </div>
                </li>

                <li class='field_block' id='field_1_div'><div class='col_label'>
                        <label class='form_field'>alias</label> <label class='form_required' >*</label> </div>
                    <div class='col_field'>
                        <input type="text" name="field_1"  id="field_1" value="<?php  phpfmg_hsc("field_1", ""); ?>" class='text_box'>
                        <div id='field_1_tip' class='instruction'>i.e. Holtes Design - Production</div>
                    </div>
                </li>

                <li class='field_block' id='field_2_div'><div class='col_label'>
                        <label class='form_field'>ip address</label> <label class='form_required' >*</label> </div>
                    <div class='col_field'>
                        <input type="text" name="field_2"  id="field_2" value="<?php  phpfmg_hsc("field_2", ""); ?>" class='text_box'>
                        <div id='field_2_tip' class='instruction'>i.e. 127.0.0.1</div>
                    </div>
                </li>

                <li class='field_block' id='field_3_div'><div class='col_label'>
                        <label class='form_field'>website_check_url</label> <label class='form_required' >*</label> </div>
                    <div class='col_field'>
                        <input type="text" name="field_3"  id="field_3" value="<?php  phpfmg_hsc("field_3", ""); ?>" class='text_box'>
                        <div id='field_3_tip' class='instruction'>i.e. https://holtesdesign.nl</div>
                    </div>
                </li>

                <li class='field_block' id='field_4_div'><div class='col_label'>
                        <label class='form_field'>website_word_check</label> <label class='form_required' >*</label> </div>
                    <div class='col_field'>
                        <input type="text" name="field_4"  id="field_4" value="<?php  phpfmg_hsc("field_4", ""); ?>" class='text_box'>
                        <div id='field_4_tip' class='instruction'>i.e. holtesdesign</div>
                    </div>
                </li>

                <li class='field_block' id='field_5_div'><div class='col_label'>
                        <label class='form_field'>webmail_check_url</label> <label class='form_required' >&nbsp;</label> </div>
                    <div class='col_field'>
                        <input type="text" name="field_5"  id="field_5" value="<?php  phpfmg_hsc("field_5", ""); ?>" class='text_box'>
                        <div id='field_5_tip' class='instruction'>i.e. http://webmail.holtesdesign.nl</div>
                    </div>
                </li>

                <li class='field_block' id='field_6_div'><div class='col_label'>
                        <label class='form_field'>webmail_word_check</label> <label class='form_required' >&nbsp;</label> </div>
                    <div class='col_field'>
                        <input type="text" name="field_6"  id="field_6" value="<?php  phpfmg_hsc("field_6", ""); ?>" class='text_box'>
                        <div id='field_6_tip' class='instruction'>i.e. Roundcube</div>
                    </div>
                </li>

                <li class='field_block' id='field_7_div'><div class='col_label'>
                        <label class='form_field'>imap_host</label> <label class='form_required' >&nbsp;</label> </div>
                    <div class='col_field'>
                        <input type="text" name="field_7"  id="field_7" value="<?php  phpfmg_hsc("field_7", ""); ?>" class='text_box'>
                        <div id='field_7_tip' class='instruction'>i.e. holtesdesign.nl</div>
                    </div>
                </li>

                <li class='field_block' id='field_8_div'><div class='col_label'>
                        <label class='form_field'>imap_user</label> <label class='form_required' >&nbsp;</label> </div>
                    <div class='col_field'>
                        <input type="text" name="field_8"  id="field_8" value="<?php  phpfmg_hsc("field_8", ""); ?>" class='text_box'>
                        <div id='field_8_tip' class='instruction'>i.e. user@holtesdesign.nl</div>
                    </div>
                </li>

                <li class='field_block' id='field_9_div'><div class='col_label'>
                        <label class='form_field'>imap_pass</label> <label class='form_required' >&nbsp;</label> </div>
                    <div class='col_field'>
                        <input type="text" name="field_9"  id="field_9" value="<?php  phpfmg_hsc("field_9", ""); ?>" class='text_box'>
                        <div id='field_9_tip' class='instruction'>i.e. uhuhuhyoudidntsaythemagicword</div>
                    </div>
                </li>

                <li class='field_block' id='field_10_div'><div class='col_label'>
                        <label class='form_field'>pop3_host</label> <label class='form_required' >&nbsp;</label> </div>
                    <div class='col_field'>
                        <input type="text" name="field_10"  id="field_10" value="<?php  phpfmg_hsc("field_10", ""); ?>" class='text_box'>
                        <div id='field_10_tip' class='instruction'>i.e. holtesdesign.nl</div>
                    </div>
                </li>

                <li class='field_block' id='field_11_div'><div class='col_label'>
                        <label class='form_field'>pop3_user</label> <label class='form_required' >&nbsp;</label> </div>
                    <div class='col_field'>
                        <input type="text" name="field_11"  id="field_11" value="<?php  phpfmg_hsc("field_11", ""); ?>" class='text_box'>
                        <div id='field_11_tip' class='instruction'>i.e. user@holtesdesign.nl</div>
                    </div>
                </li>

                <li class='field_block' id='field_12_div'><div class='col_label'>
                        <label class='form_field'>pop3_pass</label> <label class='form_required' >&nbsp;</label> </div>
                    <div class='col_field'>
                        <input type="text" name="field_12"  id="field_12" value="<?php  phpfmg_hsc("field_12", ""); ?>" class='text_box'>
                        <div id='field_12_tip' class='instruction'>i.e. uhuhuhyoudidntsaythemagicword</div>
                    </div>
                </li>


                <li class='field_block' id='phpfmg_captcha_div'>
                    <div class='col_label'></div><div class='col_field'>
                        <?php phpfmg_show_captcha(); ?>
                    </div>
                </li>


                <li>
                    <div class='col_label'>&nbsp;</div>
                    <div class='form_submit_block col_field'>


                        <input type='submit' value='Submit' class='form_button'>

                        <div id='err_required' class="form_error" style='display:none;'>
                            <label class='form_error_title'>Please check the required fields</label>
                        </div>



                        <span id='phpfmg_processing' style='display:none;'>
                    <img id='phpfmg_processing_gif' src='<?php echo PHPFMG_ADMIN_URL . '?mod=image&amp;func=processing' ;?>' border=0 alt='Processing...'> <label id='phpfmg_processing_dots'></label>
                </span>
                    </div>
                </li>

            </ol>
        </form>

    </div>









    <?php





function phpfmg_form_css(){
    $formOnly = isset($GLOBALS['formOnly']) && true === $GLOBALS['formOnly'];
    ?>
    <style type='text/css'>
        <?php
        if( !$formOnly ){
            echo"
        body{
            margin-left: 18px;
            margin-top: 18px;
        }
        
        body{
            font-family : Verdana, Arial, Helvetica, sans-serif;
            font-size : 13px;
            color : #474747;
            background-color: transparent;
        }
        
        select, option{
            font-size:13px;
        }
        ";
        }; // if
        ?>

        ol.phpfmg_form{
            list-style-type:none;
            padding:0px;
            margin:0px;
        }

        ol.phpfmg_form input, ol.phpfmg_form textarea, ol.phpfmg_form select{
            border: 1px solid #ccc;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
        }

        ol.phpfmg_form li{
            margin-bottom:5px;
            clear:both;
            display:block;
            overflow:hidden;
            width: 100%
        }


        .form_field, .form_required{
            font-weight : bold;
        }

        .form_required{
            color:red;
            margin-right:8px;
        }

        .field_block_over{
        }

        .form_submit_block{
            padding-top: 3px;
        }

        .text_box,.text_select {
            height: 32px;
        }

        .text_box, .text_area, .text_select {
            min-width:160px;
            max-width:300px;
            width: 100%;
            margin-bottom: 10px;
        }

        .text_area{
            height:80px;
        }

        .form_error_title{
            font-weight: bold;
            color: red;
        }

        .form_error{
            background-color: #F4F6E5;
            border: 1px dashed #ff0000;
            padding: 10px;
            margin-bottom: 10px;
        }

        .form_error_highlight{
            background-color: #F4F6E5;
            border-bottom: 1px dashed #ff0000;
        }

        div.instruction_error{
            color: red;
            font-weight:bold;
        }

        hr.sectionbreak{
            height:1px;
            color: #ccc;
        }

        #one_entry_msg{
            background-color: #F4F6E5;
            border: 1px dashed #ff0000;
            padding: 10px;
            margin-bottom: 10px;
        }


        #frmFormMailContainer input[type="submit"]{
            padding: 10px 25px;
            font-weight: bold;
            margin-bottom: 10px;
            background-color: #FAFBFC;
        }

        #frmFormMailContainer input[type="submit"]:hover{
            background-color: #E4F0F8;
        }

        <?php phpfmg_text_align();?>



    </style>

    <?php
}

?>