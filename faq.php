<?php
	$GLOBALS['page_title'] = 'FAQs | About | Florida Dance Marathon';
	$GLOBALS['parent'] = 'about';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax about">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>FAQs</h1>
	  		</div>
    	</div>
	  </div>
	</div>
</div>

<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
  			<div class="sub-nav">
          <ul>
						<li><a href="/uf-health">CMN & UF Health</a></li>
						<li><a href="/our-story">Our Story</a></li>
						<li><a href="/dmaa">DMAA</a></li>
						<li><a class="active">FAQ</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-9">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  How can I ask a specific question?
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                We love questions! Send any inquiries to <a href="mailto:floridadm@floridadm.org">floridadm@floridadm.org</a>.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Who should I contact if I have a press inquiry?
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                Please contact our Public Relations Overall Chair, Melissa Dukes, at <a href="mailto:mdukes@floridadm.org">mdukes@floridadm.org</a>.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Can I send a donation via check?
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                Of course you can! Please make all checks out to Children's Miracle Network, and send them to
                <br><br>CMN Attn: DM at UF
                <br>PO Box 100386
                <br>Gainesville, FL 32610
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                  Where can I get instant updates about DM at UF?
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
              <div class="panel-body">
                Like us on <a href="http://www.facebook.com/floridaDM">Facebook</a> and follow us on <a href="http://www.twitter.com/floridadm">Twitter</a> and <a href="http://www.instagram.com/dmatuf">Instagram</a>.
              </div>
            </div>
          </div>
        </div>
      </div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
