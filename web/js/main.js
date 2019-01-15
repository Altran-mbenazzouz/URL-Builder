  
  $('#campaignName, #landingPage, #content, #form_Value').on('keypress', function (event) {
        var regex = new RegExp("^[a-zA-Z0-9-.]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
           event.preventDefault();
           $(this).parent().attr("class", "has-error");
           $("#cont-spechError").html("<div class='alert alert-danger alert-dismissible' id='spechError' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Warning!</strong> Krux doesn't accept special characters. Values are expected to only contain alphanumeric characters (a-z, A-Z, 0-9), although dashes (-) are accepted.</div>");
           return false;
        }
        else {
           $(this).parent().attr("class", "");
        }
    });


  function CopyResult(){

  	  var copyText = document.getElementById("result");
  	  console.log($(this).closest('textarea').attr('id'));
 		  copyText.select();
  document.execCommand("copy");
  $('#textCopied').show(500).delay(1500).hide(300);;

  }



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
      else if (country == 'ES' && brand == 'AC' && source == 'EMAIL') {
        kxconfid = 'rmwsp9cnw';
		nomParamNUMCLI = 'ddm1_psa_aces';
      }
	  else if (country == 'ES' && brand == 'AC' && source == 'SOCIAL') {
        kxconfid = 'rmwsi4m51';
		nomParamNUMCLI = 'ddm1_psa_aces';
      }
	  else if (country == 'ES' && brand == 'AC' && source == 'DISPLAY') {
        kxconfid = 'rmwr3840s';
		nomParamNUMCLI = 'ddm1_psa_aces';
      }
      else if (country == 'ES' && brand == 'DS' && source == 'EMAIL') {
        kxconfid = 'rm0uvq050';
		nomParamNUMCLI = 'ddm1_psa_dses';
      }
	  else if (country == 'ES' && brand == 'DS' && source == 'SOCIAL') {
        kxconfid = 'rm0usupy6';
		nomParamNUMCLI = 'ddm1_psa_dses';
      }
	  else if (country == 'ES' && brand == 'DS' && source == 'DISPLAY') {
        kxconfid = 'rm0umwpfq';
		nomParamNUMCLI = 'ddm1_psa_dses';
      }
      else if (country == 'FR' && brand == 'AP' && source == 'EMAIL') {
        kxconfid = 'q7h4cvvm0';
		nomParamNUMCLI = 'ddm1_psa_apfr';
      }
	  else if (country == 'FR' && brand == 'AP' && source == 'SOCIAL') {
        kxconfid = 'q7h7f224u';
		nomParamNUMCLI = 'ddm1_psa_apfr';
      }
	  else if (country == 'FR' && brand == 'AP' && source == 'DISPLAY') {
        kxconfid = 'q7hxg0rrt';
		nomParamNUMCLI = 'ddm1_psa_apfr';
      }
      else if (country == 'FR' && brand == 'AC' && source == 'EMAIL') {
        kxconfid = 'q9sffewmo';
		nomParamNUMCLI = 'ddm1_psa_acfr';
	  }
	  else if (country == 'FR' && brand == 'AC' && source == 'SOCIAL') {
        kxconfid = 'q9sfi6yq8';
		nomParamNUMCLI = 'ddm1_psa_acfr';
      }
	  else if (country == 'FR' && brand == 'AC' && source == 'DISPLAY') {
        kxconfid = 'q9sfdfnq7';
		nomParamNUMCLI = 'ddm1_psa_acfr';
      }
      else if (country == 'FR' && brand == 'DS' && source == 'EMAIL') {
        kxconfid = 'rm0tmtq20';
		nomParamNUMCLI = 'ddm1_psa_dsfr';
      }
	  else if (country == 'FR' && brand == 'DS' && source == 'SOCIAL') {
        kxconfid = 'rm0tpt8zp';
		nomParamNUMCLI = 'ddm1_psa_dsfr';
      }
      else if (country == 'FR' && brand == 'DS' && source == 'DISPLAY') {
        kxconfid = 'rm0tlagts';
		nomParamNUMCLI = 'ddm1_psa_dsfr';
      }
      else if (country == 'IT' && brand == 'AP' && source == 'EMAIL') {
        kxconfid = 'rse3c2ibt';
		nomParamNUMCLI = 'ddm1_psa_apit';
      }
	  else if (country == 'IT' && brand == 'AP' && source == 'SOCIAL') {
        kxconfid = 'rse3b1n7w';
		nomParamNUMCLI = 'ddm1_psa_apit';
      }
	  else if (country == 'IT' && brand == 'AP' && source == 'DISPLAY') {
        kxconfid = 'rse28bixr';
		nomParamNUMCLI = 'ddm1_psa_apit';
      }
      else if (country == 'IT' && brand == 'AC' && source == 'EMAIL') {
        kxconfid = 'rse3kcqtb';
		nomParamNUMCLI = 'ddm1_psa_acit';
      }
	  else if (country == 'IT' && brand == 'AC' && source == 'SOCIAL') {
        kxconfid = 'rse3ji8rr';
		nomParamNUMCLI = 'ddm1_psa_acit';
      }
	  else if (country == 'IT' && brand == 'AC' && source == 'DISPLAY') {
        kxconfid = 'rse3golp6';
		nomParamNUMCLI = 'ddm1_psa_acit';
      }
      else if (country == 'IT' && brand == 'DS' && source == 'EMAIL') {
        kxconfid = 'rse3q4l4f';
		nomParamNUMCLI = 'ddm1_psa_dsit';
      }
	  else if (country == 'IT' && brand == 'DS' && source == 'SOCIAL') {
        kxconfid = 'rse3qa760';
		nomParamNUMCLI = 'ddm1_psa_dsit';
      }
	  else if (country == 'IT' && brand == 'DS' && source == 'DISPLAY') {
        kxconfid = 'rse3npaj0';
		nomParamNUMCLI = 'ddm1_psa_dsit';
      }
      else if (country == 'PT' && brand == 'AP' && source == 'EMAIL') {
        kxconfid = 'ryl349p6w';
		nomParamNUMCLI = 'ddm1_psa_appt';
      }
	  else if (country == 'PT' && brand == 'AP' && source == 'SOCIAL') {
        kxconfid = 'ryl323ahu';
		nomParamNUMCLI = 'ddm1_psa_appt';
      }
	  else if (country == 'PT' && brand == 'AP' && source == 'DISPLAY') {
        kxconfid = 'ryl3qpcur';
		nomParamNUMCLI = 'ddm1_psa_appt';
      }
	  else if (country == 'PT' && brand == 'AC' && source == 'EMAIL') {
        kxconfid = 'ryl4ju47v';
		nomParamNUMCLI = 'ddm1_psa_acpt';
      }
	  else if (country == 'PT' && brand == 'AC' && source == 'SOCIAL') {
        kxconfid = 'ryl4h7t7m';
		nomParamNUMCLI = 'ddm1_psa_acpt';
      }
      else if (country == 'PT' && brand == 'AC' && source == 'DISPLAY') {
        kxconfid = 'ryl38r7cm';
		nomParamNUMCLI = 'ddm1_psa_acpt';
      }
      else if (country == 'PT' && brand == 'DS' && source == 'EMAIL') {
        kxconfid = 'ryl4wcnlx';
		nomParamNUMCLI = 'ddm1_psa_dspt';
      }
	  else if (country == 'PT' && brand == 'DS' && source == 'SOCIAL') {
        kxconfid = 'ryl4uxbdi';
		nomParamNUMCLI = 'ddm1_psa_dspt';
      }
	  else if (country == 'PT' && brand == 'DS' && source == 'DISPLAY') {
        kxconfid = 'ryl4p2oh9';
		nomParamNUMCLI = 'ddm1_psa_dspt';
      }
      else if (country == 'UK' && brand == 'AP' && source == 'EMAIL') {
        kxconfid = 'rm0x85v6t';
		nomParamNUMCLI = 'ddm1_psa_apuk';
      }
	  else if (country == 'UK' && brand == 'AP' && source == 'SOCIAL') {
        kxconfid = 'rm0x70zra';
		nomParamNUMCLI = 'ddm1_psa_apuk';
      }
	  else if (country == 'UK' && brand == 'AP' && source == 'DISPLAY') {
        kxconfid = 'rm0x19wcl';
		nomParamNUMCLI = 'ddm1_psa_apuk';
      }
      else if (country == 'UK' && brand == 'AC' && source == 'EMAIL') {
        kxconfid = 'rm0yoc8tj';
		nomParamNUMCLI = 'ddm1_psa_acuk';
      }
	  else if (country == 'UK' && brand == 'AC' && source == 'SOCIAL') {
        kxconfid = 'rm0ymjb6q';
		nomParamNUMCLI = 'ddm1_psa_acuk';
      }
	  else if (country == 'UK' && brand == 'AC' && source == 'DISPLAY') {
        kxconfid = 'rm0yg5ztn';
		nomParamNUMCLI = 'ddm1_psa_acuk';
      }
      else if (country == 'UK' && brand == 'DS' && source == 'EMAIL') {
        kxconfid = 'rm0zgo9a0';
		nomParamNUMCLI = 'ddm1_psa_dsuk';
      }
	  else if (country == 'UK' && brand == 'DS' && source == 'SOCIAL') {
        kxconfid = 'rm0zfh2sb';
		nomParamNUMCLI = 'ddm1_psa_dsuk';
      }
	  else if (country == 'UK' && brand == 'DS' && source == 'DISPLAY') {
        kxconfid = 'rm0y6cwas';
		nomParamNUMCLI = 'ddm1_psa_dsuk';
      }
	  else if (country == 'PL' && brand == 'AC' && source == 'EMAIL') {
        kxconfid = 'sslpf55gu';
		nomParamNUMCLI = 'ddm1_psa_acpl';
      }
	  else if (country == 'PL' && brand == 'AC' && source == 'DISPLAY') {
        kxconfid = 'sx768607z';
		nomParamNUMCLI = 'ddm1_psa_acpl';
      }
      else if (country == 'PL' && brand == 'DS' && source == 'EMAIL') {
        kxconfid = 'sslpiil1k';
		nomParamNUMCLI = 'ddm1_psa_dspl';
      }
	  else if (country == 'PL' && brand == 'DS' && source == 'DISPLAY') {
        kxconfid = 'sx77gxati';
		nomParamNUMCLI = 'ddm1_psa_dspl';
      }
	
	  else if (country == 'AT' && brand == 'AC' && source == 'DISPLAY') {
        kxconfid = 'tbvu59ug8';
		nomParamNUMCLI = 'ddm1_psa_acat';
      }
      else if (country == 'AT' && brand == 'AC' && source == 'EMAIL') {
        kxconfid = 'tbvvc292w';
		nomParamNUMCLI = 'ddm1_psa_acat';
      }
	  else if (country == 'AT' && brand == 'AC' && source == 'SOCIAL') {
        kxconfid = 'tbvvik5u8';
		nomParamNUMCLI = 'ddm1_psa_acat';
      }
	  
	  else if (country == 'AT' && brand == 'AP' && source == 'DISPLAY') {
        kxconfid = 'tbvvmtf38';
		nomParamNUMCLI = 'ddm1_psa_apat';
      }
      else if (country == 'AT' && brand == 'AP' && source == 'EMAIL') {
        kxconfid = 'tbvvqwymb';
		nomParamNUMCLI = 'ddm1_psa_apat';
      }
	  else if (country == 'AT' && brand == 'AP' && source == 'SOCIAL') {
        kxconfid = 'tbvvtwqrz';
		nomParamNUMCLI = 'ddm1_psa_apat';
      }
	  
	  else if (country == 'AT' && brand == 'DS' && source == 'DISPLAY') {
        kxconfid = 'tbvv3dj0p';
		nomParamNUMCLI = 'ddm1_psa_dsat';
      }
      else if (country == 'AT' && brand == 'DS' && source == 'EMAIL') {
        kxconfid = 'tbvv4590n';
		nomParamNUMCLI = 'ddm1_psa_dsat';
      }
	  else if (country == 'AT' && brand == 'DS' && source == 'SOCIAL') {
        kxconfid = 'tbvwajhf5';
		nomParamNUMCLI = 'ddm1_psa_dsat';
      }
	  
	  else if (country == 'CH' && brand == 'AC' && source == 'DISPLAY') {
        kxconfid = 'the2v6l7z';
		nomParamNUMCLI = 'ddm1_psa_acch';
      }
      else if (country == 'CH' && brand == 'AC' && source == 'EMAIL') {
        kxconfid = 'the2yljed';
		nomParamNUMCLI = 'ddm1_psa_acch';
      }
	  else if (country == 'CH' && brand == 'AC' && source == 'SOCIAL') {
        kxconfid = 'the21b3kb';
		nomParamNUMCLI = 'ddm1_psa_acch';
      }
	  
	  else if (country == 'CH' && brand == 'AP' && source == 'DISPLAY') {
        kxconfid = 'the3c7b55';
		nomParamNUMCLI = 'ddm1_psa_apch';
      }
      else if (country == 'CH' && brand == 'AP' && source == 'EMAIL') {
        kxconfid = 'the29w6um';
		nomParamNUMCLI = 'ddm1_psa_apch';
      }
	  else if (country == 'CH' && brand == 'AP' && source == 'SOCIAL') {
        kxconfid = 'the3h34tr';
		nomParamNUMCLI = 'ddm1_psa_apch';
      }
	  
	  else if (country == 'CH' && brand == 'DS' && source == 'DISPLAY') {
        kxconfid = 'the3luk9c';
		nomParamNUMCLI = 'ddm1_psa_dsch';
      }
      else if (country == 'CH' && brand == 'DS' && source == 'EMAIL') {
        kxconfid = 'the3mvrct';
		nomParamNUMCLI = 'ddm1_psa_dsch';
      }
	  else if (country == 'CH' && brand == 'DS' && source == 'SOCIAL') {
        kxconfid = 'the3ksb8u';
		nomParamNUMCLI = 'ddm1_psa_dsch';
      }

	 //productCategory = productCategory.toLowerCase();
      //campaignName = campaignName.replace(/ /g, '-');
      //date = date.replace(/ /g, '-');
      //content = content.replace(/ /g, '-');

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

      var url1 = $('#id-0').data('isAuthenticated');
      var url2 = $('#id-1').data('isAuthenticated');

      console.log(url1,url2);

      var kruxClickTracker = url1+"/click_tracker/track?kxconfid=" + kxconfid + "&kxsiteid=" + source + "&kxadvertiserid=" + communicationMedium + "&kxcampaignid=" + utm_campaign_ + contentKrux + "&clk=" + urlGATracked;


      result = kruxClickTracker;

      result2 = "<img src='"+url2+"/1x1_ad_impression.gif?confid=" + 
      	kxconfid + "&siteid=" + source + "&advertiserid=" + communicationMedium + "&campaignid=" + 
      	utm_campaign_ + " width='0' height='0' style='display:none;'/>";

      if ((country == 'FR') && (brand == 'AP')) {
        result3 = '<img src="'+url2+'/1x1_usermatch.gif?partner=ap_fr&partner_uid=CRMID" width="0" height="0" style="display:none;">';
      }
      else if ((country == 'FR') && (brand == 'AC')) {
        result3 = '<img src="'+url2+'/1x1_usermatch.gif?partner=psa_fr&partner_uid=CRMID" width="0" height="0" style="display:none;">';
      }
      else if (country == 'NL') {
        result3 = '<img src="'+url2+'/1x1_usermatch.gif?partner=psa_' + brand.toLowerCase() + country.toLowerCase() + '&partner_uid=CRMID" width="0" height="0" style="display:none;">';
      }
      else {
        result3 = '<img src="'+url2+'/1x1_usermatch.gif?partner=psa_' + brand.toLowerCase() + country.toLowerCase() + '&partner_uid=CRMID" width="0" height="0" style="display:none;">';
      }

      $("#result").html(result);

      $("#openPixel").html(result2);

      $("#userMatchPixel").html(result3);
   //$('<thead class="thead-light"><tr><th> title </th>	</tr> </thead>').appendTo('#listTrackers tbody');
   $('#listTrackers').show();
   $("  <tr> <th style='width:10%;'> <strong>"+ utm_campaign_ + contentKrux +" </strong> </th> <td> <textarea class='form-control' rows='3'>"+result+'</textarea> </td>  <td> <textarea class="form-control" rows="3">'+result2+'</textarea> </td> </td> <td> <textarea class="form-control" rows="3">'+result3+'</textarea> </td> </td> </tr>').appendTo('#listTrackers tbody');


});

/*function verif(evt) {
        var keyCode = evt.which ? evt.which : evt.keyCode;
        var accept = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        if (accept.indexOf(String.fromCharCode(keyCode)) >= 0) {
            return true;
        } else {
            return false;
            <tr> <td colspan='3'> <strong>"+ utm_campaign_ + contentKrux +" </strong> </td> </tr>
        }
    }*/