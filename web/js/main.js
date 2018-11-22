$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});


    $("#generate").click(function() {

    $('#trackers').show();
      /***
      *** INIT
      ***/
      country = $('#country').val();
      brand = $('#brand').val();
      landingPage = $('#landingPage').val();
      encode = $('input[name=encode]:checked').val();
      campaignName = $('#campaignName').val();
      productCategory = $('#productCategory').val();
      vehicle = $('#vehicle').val();
      context = $('#context').val();
      campaignGoal = $('#campaignGoal').val();
      communicationMedium = $('#communicationMedium').val();
      source = $('#source').val();
      content = $('#content').val();
      addCRMID = $('input[name=addCRMID]:checked').val();
      date = $('#date').val();
      CorL = $('#CorL').val();
      PorT = $('#PorT').val();

      nomParamNUMCLI = 'ddm1_psa';
      hasContent = false;
      contentKrux = '';
      contentUTM = '';
      firstParameter = "?";

      console.log('generate');     

      /***
      *** VERIF
      ***/

      var cptError = 0;
      var regex = new RegExp("^[a-zA-Z0-9-]+$");
      if (campaignName != "" && !regex.test(campaignName)) {
        cptError++;
        $("#cont-spechError").html("<div class='alert alert-danger alert-dismissible' id='spechError' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Warning!</strong> Krux doesn't accept special characters. Values are expected to only contain alphanumeric characters (a-z, A-Z, 0-9), although dashes (-) are accepted.</div>");
      }

      if (source != "" && !regex.test(source)) {
        cptError++;
        $("#cont-spechError").html("<div class='alert alert-danger alert-dismissible' id='spechError' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Warning!</strong> Krux doesn't accept special characters. Values are expected to only contain alphanumeric characters (a-z, A-Z, 0-9), although dashes (-) are accepted.</div>");
      }

      if (date != "" && !regex.test(date)) {
        cptError++;
        $("#cont-spechError").html("<div class='alert alert-danger alert-dismissible' id='spechError' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Warning!</strong> Krux doesn't accept special characters. Values are expected to only contain alphanumeric characters (a-z, A-Z, 0-9), although dashes (-) are accepted.</div>");
      }

      if (content != "" && !regex.test(content)) {
        cptError++;
        $("#cont-spechError").html("<div class='alert alert-danger alert-dismissible' id='spechError' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Warning!</strong> Krux doesn't accept special characters. Values are expected to only contain alphanumeric characters (a-z, A-Z, 0-9), although dashes (-) are accepted.</div>");
      }


      $("input").each(function() {
        if (($(this).attr("class") == "form-control required") && ($(this).val() == "")) {
            $(this).parent().attr("class", "has-error");
            cptError++;
        }
        else {
            $(this).parent().attr("class", "");
        }
      });

      $("select").each(function() {
        if (($(this).attr("type") == "required") && (($(this).val() == null) || ($(this).val() == "Select value..."))) {
            $(this).parent().attr("class", "has-error");
            cptError++;
        }

        else {
            $(this).parent().attr("class", "");
        }
      });

      if (cptError > 0) {
        $("#trackers").hide();
        return;
      }
      else {
        $("#trackers").show();
      }


      /***
      **** WORK
      ***/
      
      var n = landingPage.search("#");
      var slicedURL = landingPage.split('#');
      if (n!=-1.0){
        slicedURL[1] = '#' + slicedURL[1];
      }
      else{
        slicedURL = [landingPage,''];
      }

     
      if(landingPage.indexOf('?') != '-1') {
        firstParameter = '&';
      }
      
      kxconfid = 'CONFID-NOT-DEFINED-YET';
      if (country == 'NL' && brand == 'AP' && source == 'EMAIL') {
        kxconfid = 'rq3n28gze';
		nomParamNUMCLI = 'ddm1_psa_apnl';
      }
	  if (country == 'NL' && brand == 'AP' && source == 'SOCIAL') {
        kxconfid = 'rq3nu58yk';
		nomParamNUMCLI = 'ddm1_psa_apnl';
      }
	  if (country == 'NL' && brand == 'AP' && source == 'DISPLAY') {
        kxconfid = 'rooji7e2r';
		nomParamNUMCLI = 'ddm1_psa_apnl';
      }
      else if (country == 'NL' && brand == 'AC' && source == 'EMAIL') {
        kxconfid = 'rookcoh8h';
		nomParamNUMCLI = 'ddm1_psa_acnl';
      }
	  else if (country == 'NL' && brand == 'AC' && source == 'SOCIAL') {
        kxconfid = 'rookbueiq';
		nomParamNUMCLI = 'ddm1_psa_acnl';
      }
	  else if (country == 'NL' && brand == 'AC' && source == 'DISPLAY') {
        kxconfid = 'rooj8oyey';
		nomParamNUMCLI = 'ddm1_psa_acnl';
      }
      else if (country == 'NL' && brand == 'DS' && source == 'EMAIL') {
        kxconfid = 'rooknyjs1';
		nomParamNUMCLI = 'ddm1_psa_dsnl';
      }
	  else if (country == 'NL' && brand == 'DS' && source == 'SOCIAL') {
        kxconfid = 'rookm64qf';
		nomParamNUMCLI = 'ddm1_psa_dsnl';
      }
	  else if (country == 'NL' && brand == 'DS' && source == 'DISPLAY') {
        kxconfid = 'rookki31o';
		nomParamNUMCLI = 'ddm1_psa_dsnl';
      }
      else if (country == 'BE' && brand == 'AP' && source == 'EMAIL') {
        kxconfid = 'rvqymprv2';
		nomParamNUMCLI = 'ddm1_psa_apbe';
      }
	  else if (country == 'BE' && brand == 'AP' && source == 'SOCIAL') {
        kxconfid = 'rvqylrciq';
		nomParamNUMCLI = 'ddm1_psa_apbe';
      }
	  else if (country == 'BE' && brand == 'AP' && source == 'DISPLAY') {
        kxconfid = 'rvqyfsq3r';
		nomParamNUMCLI = 'ddm1_psa_apbe';
      }
      else if (country == 'BE' && brand == 'AC' && source == 'EMAIL') {
        kxconfid = 'rvqyzfrwk';
		nomParamNUMCLI = 'ddm1_psa_acbe';
      }
	  else if (country == 'BE' && brand == 'AC' && source == 'SOCIAL') {
        kxconfid = 'rvqyxuq2c';
		nomParamNUMCLI = 'ddm1_psa_acbe';
      }
	  else if (country == 'BE' && brand == 'AC' && source == 'DISPLAY') {
        kxconfid = 'rvqysys1z';
		nomParamNUMCLI = 'ddm1_psa_acbe';
      }
      else if (country == 'BE' && brand == 'DS' && source == 'EMAIL') {
        kxconfid = 'rvrh1ibyf';
		nomParamNUMCLI = 'ddm1_psa_dsbe';
      }
	  else if (country == 'BE' && brand == 'DS' && source == 'SOCIAL') {
        kxconfid = 'rvrh0iy9a';
		nomParamNUMCLI = 'ddm1_psa_dsbe';
      }
	  else if (country == 'BE' && brand == 'DS' && source == 'DISPLAY') {
        kxconfid = 'rvrhxo5fu';
		nomParamNUMCLI = 'ddm1_psa_dsbe';
      }
      else if (country == 'LU' && brand == 'AP' && source == 'EMAIL') {
        kxconfid = 'rvqymprv2';
		nomParamNUMCLI = 'ddm1_psa_aplu';
      }
	  else if (country == 'LU' && brand == 'AP' && source == 'SOCIAL') {
        kxconfid = 'rvqylrciq';
		nomParamNUMCLI = 'ddm1_psa_aplu';
      }
	  else if (country == 'LU' && brand == 'AP' && source == 'DISPLAY') {
        kxconfid = 'rvqyfsq3r';
		nomParamNUMCLI = 'ddm1_psa_aplu';
      }
      else if (country == 'LU' && brand == 'AC' && source == 'EMAIL') {
        kxconfid = 'rvqyzfrwk';
		nomParamNUMCLI = 'ddm1_psa_aclu';
      }
	  else if (country == 'LU' && brand == 'AC' && source == 'SOCIAL') {
        kxconfid = 'rvqyxuq2c';
		nomParamNUMCLI = 'ddm1_psa_aclu';
      }
	  else if (country == 'LU' && brand == 'AC' && source == 'DISPLAY') {
        kxconfid = 'rvqysys1z';
		nomParamNUMCLI = 'ddm1_psa_aclu';
      }
      else if (country == 'LU' && brand == 'DS' && source == 'EMAIL') {
        kxconfid = 'rvrh1ibyf';
		nomParamNUMCLI = 'ddm1_psa_dslu';
      }
	  else if (country == 'LU' && brand == 'DS' && source == 'SOCIAL') {
        kxconfid = 'rvrh0iy9a';
		nomParamNUMCLI = 'ddm1_psa_dslu';
      }
	  else if (country == 'LU' && brand == 'DS' && source == 'DISPLAY') {
        kxconfid = 'rvrhxo5fu';
		nomParamNUMCLI = 'ddm1_psa_dslu';
      }
      else if (country == 'DE' && brand == 'AP' && source == 'EMAIL') {
        kxconfid = 'rvp2go7z0';
		nomParamNUMCLI = 'ddm1_psa_apde';
      }
	  else if (country == 'DE' && brand == 'AP' && source == 'SOCIAL') {
        kxconfid = 'rvp2kcsaj';
		nomParamNUMCLI = 'ddm1_psa_apde';
      }
	  else if (country == 'DE' && brand == 'AP' && source == 'DISPLAY') {
        kxconfid = 'rvp2er2m6';
		nomParamNUMCLI = 'ddm1_psa_apde';
      }
      else if (country == 'DE' && brand == 'AC' && source == 'EMAIL') {
        kxconfid = 'rvqanj8cc';
		nomParamNUMCLI = 'ddm1_psa_acde';
      }
	  else if (country == 'DE' && brand == 'AC' && source == 'SOCIAL') {
        kxconfid = 'rvqalv67q';
		nomParamNUMCLI = 'ddm1_psa_acde';
      }
	  else if (country == 'DE' && brand == 'AC' && source == 'DISPLAY') {
        kxconfid = 'rvqai3tbe';
		nomParamNUMCLI = 'ddm1_psa_acde';
      }
      else if (country == 'DE' && brand == 'DS' && source == 'EMAIL') {
        kxconfid = 'rvqauzm14';
		nomParamNUMCLI = 'ddm1_psa_dsde';
      }
	  else if (country == 'DE' && brand == 'DS' && source == 'SOCIAL') {
        kxconfid = 'rvqatzf65';
		nomParamNUMCLI = 'ddm1_psa_dsde';
      }
	   else if (country == 'DE' && brand == 'DS' && source == 'DISPLAY') {
        kxconfid = 'rvqaq4z14';
		nomParamNUMCLI = 'ddm1_psa_dsde';
      }
      else if (country == 'ES' && brand == 'AP' && source == 'EMAIL') {
        kxconfid = 'rmwpu6euj';
		nomParamNUMCLI = 'ddm1_psa_apes';
      }
	  else if (country == 'ES' && brand == 'AP' && source == 'SOCIAL') {
        kxconfid = 'rmwp1hqif';
		nomParamNUMCLI = 'ddm1_psa_apes';
      }
	  else if (country == 'ES' && brand == 'AP' && source == 'DISPLAY') {
        kxconfid = 'rnlgvyxcz';
		nomParamNUMCLI = 'ddm1_psa_apes';
      }



var utm_campaign_ =  brand + '_' + country + '_' + campaignName + '_' + productCategory + '_' + vehicle + '_' + context  + '_' + communicationMedium +'_'  + CorL + '_' + campaignGoal;

var crmID_ = '';
      if (addCRMID == 'Yes' && country == 'NL') {
        crmID_ = '&' + nomParamNUMCLI + '=CRMID';
        $(".userMatchPixel").show();
      }
      else if (addCRMID == 'Yes' && country != 'NL') {
        crmID_ = '&' + nomParamNUMCLI + '=CRMID';
        $(".userMatchPixel").show();
      }
      else {
        $(".userMatchPixel").hide();
      }

      if (content != '') {
        hasContent = true;
        contentKrux = '&kxadid=' + content;
        contentUTM = '&utm_content=' + content;
      }
      
      var urlGATracked = slicedURL[0] + firstParameter + "utm_source=" + source + "&utm_medium=" + communicationMedium + "&utm_campaign=" + utm_campaign_ + contentUTM + crmID_ + slicedURL[1];
      if (encode == 'Yes') {
        urlGATracked = encodeURIComponent(urlGATracked).replace(/'/g,"%27").replace(/"/g,"%22");
      }

      var kruxClickTracker = "https://apiservices.krxd.net/click_tracker/track?kxconfid=" + kxconfid + "&kxsiteid=" + source + "&kxadvertiserid=" + communicationMedium + "&kxcampaignid=" + utm_campaign_ + contentKrux + "&clk=" + urlGATracked;


      result = kruxClickTracker;

      result2 = "<img src='https://beacon.krxd.net/1x1_ad_impression.gif?confid=" + 
      	kxconfid + "&siteid=" + source + "&advertiserid=" + communicationMedium + "&campaignid=" + 
      	utm_campaign_ + " width='0' height='0' style='display:none;'/>";

      if ((country == 'FR') && (brand == 'AP')) {
        result3 = '<img src="https://beacon.krxd.net/1x1_usermatch.gif?partner=ap_fr&partner_uid=CRMID" width="0" height="0" style="display:none;">';
      }
      else if ((country == 'FR') && (brand == 'AC')) {
        result3 = '<img src="https://beacon.krxd.net/1x1_usermatch.gif?partner=psa_fr&partner_uid=CRMID" width="0" height="0" style="display:none;">';
      }
      else if (country == 'NL') {
        result3 = '<img src="https://beacon.krxd.net/1x1_usermatch.gif?partner=psa_' + brand.toLowerCase() + country.toLowerCase() + '&partner_uid=CRMID" width="0" height="0" style="display:none;">';
      }
      else {
        result3 = '<img src="https://beacon.krxd.net/1x1_usermatch.gif?partner=psa_' + brand.toLowerCase() + country.toLowerCase() + '&partner_uid=CRMID" width="0" height="0" style="display:none;">';
      }

      $("#result").html(result);

      $("#openPixel").html(result2);

      $("#userMatchPixel").html(result3);
   //$('<thead class="thead-light"><tr><th> title </th>	</tr> </thead>').appendTo('#listTrackers tbody');

   $('<tr> <td> <textarea class="form-control" rows="3">'+result+'</textarea> </td>  <td> <textarea class="form-control" rows="3">'+result2+'</textarea> </td> </td> <td> <textarea class="form-control" rows="3">'+result3+'</textarea> </td> </td> </tr>').appendTo('#listTrackers tbody');


});

$(document).ready(function($){
    $('#clone').click(function(e){

        var result = $('#trackers #result').text();
        var openPixel = " "+$('#trackers #openPixel').text()+" ";
        var userMatchPixel = $('#trackers #userMatchPixel').text();

        //console.log(result, openPixel );

        


        //$('#listTrackers').show();
    });
});