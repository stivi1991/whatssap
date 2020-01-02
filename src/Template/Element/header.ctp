  <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a href="/" class="navbar-brand">
            <img src="/./img/logo.png" alt="logo" class="d-none d-lg-block">
            <img src="/./img/logo-small.png" alt="logo" class="d-block d-lg-none">
            <span class="sr-only">Go to homepage
            </span>
          </a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu
            <i class="fa fa-bars">
            </i>
          </button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="/users/jobsearch" class="nav-link">Advanced Search
                </a>
              </li>
              <li class="nav-item">
                <a href="/users/about" class="nav-link">Who are we?
                </a>
              </li>
              
             <li class="nav-item dropdown">
                  <a href="/employer/postjob" class="btn navbar-btn btn-outline-light mb-5 mb-lg-0">Post a job
                  </a>
             </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

        <!-- *** EMAIL CONTACT ***-->
    <div id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Contact us
            </h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close">
              <span aria-hidden="true">×
              </span>
            </button>
          </div>
          <div class="modal-body">
            <?= $this->Flash->render('auth'); ?>
            <?= $this->Form->create('User', array('url'=>array('controller'=>'users', 'action'=>'contact_email'))); ?>
            <div class="form-group">
              <?= $this->Form->control('name' , array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text','placeholder'=>'Your name','value'=>'', 'required'=>true)) ?>
            </div>
            <div class="form-group">
              <?= $this->Form->control('email' , array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'email','placeholder'=>'Your email','value'=>'', 'required'=>true)) ?>
            </div>
            <div class="form-group">
              <?= $this->Form->control('message', array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'textarea','placeholder'=>'Your message','value'=>'', 'required'=>true)) ?>
            </div>
            <p class="text-center">
              <center>
                <?= $this->Form->control('redirect', array('value' => strtolower($this->request->getParam('action')),'type'=>'hidden')) ?>
                <?= $this->Form->submit(__('Send'), array('class' => 'btn navbar-btn btn-outline-light mb-5 mb-lg-0')); ?>
                <?= $this->Form->end() ?>
              </center>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** EMAIL CONTACT END ***-->

    <!-- *** APPLY MODAL CANDIDATE***-->
    <div id="apply-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Apply for this offer
            </h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close">
              <span aria-hidden="true">×
              </span>
            </button>
          </div>
          <div class="modal-body">
            <?= $this->Flash->render('auth'); ?>
            <?= $this->Form->create('User', array('type'=>'file','url'=>array('controller'=>'users', 'action'=>'jobapply',$offer->id,$offer->apply_email,$offer->job_title,$offer->city,$offer->country,$offer->company_name))); ?>
            <div class="form-group">
              <?= $this->Form->control('candidate_name' , array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text','placeholder'=>'Full Name','value'=>'', 'required'=>true)) ?>
            </div>
            <div class="form-group">
              <?= $this->Form->control('candidate_email', array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'email','placeholder'=>'Email','value'=>'', 'required'=>true)) ?>
            </div>
            <div class="form-group">
              <?= $this->Form->file('candidate_cv', array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'file','placeholder'=>'Upload your CV...', 'required'=>true)) ?>
            </div>
            <p class="text-center">
              <center>
                <?= $this->Form->submit(__('Apply'), array('class' => 'btn navbar-btn btn-outline-light mb-5 mb-lg-0')); ?>
                <?= $this->Form->end() ?>
              </center>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** APPLY MODAL END ***-->

        <!-- *** TERMS MODAL ***-->
    <div id="terms-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content" style="width:1080px;margin:auto;position: fixed;left: -60%;">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Terms and conditions
            </h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close">
              <span aria-hidden="true">×
              </span>
            </button>
          </div>
          <div class="modal-body">
            <p class="text-center">
              <center>

<p dir="ltr" style="line-height: 1.2; margin-right: -2.95pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:13.999999999999998pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Regulamin serwisu &nbsp;WHAT’S SAP</span></p>
<p dir="ltr" style="line-height: 1.2; margin-right: -2.95pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">§ I DEFINICJE</span></p>
<p dir="ltr" style="line-height: 1.63; margin: 0pt 1pt 0pt 21pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Użyte w Regulaminie pojęcia pisane wielką literą mają znaczenie przypisane im w treści Regulaminu.</span></p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:12pt;font-family:'Times New Roman';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -18pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">What’s SAP lub Serwis&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">–&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Serwis internetowy znajdujący się pod adresem</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:#ffffff;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span>
      <a href="https://www.whatssap.it" style="text-decoration:none;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">www.whatssap.it&nbsp;</span></a><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">prowadzony przez Amity Consulting Przemysław Święcicki Z siedzibą w Kole przy ul. Buczka 18, 62-600, NIP 7792495853, REGON 381306643, osoba reprezentująca firmę: Marika Gajewska-Święcicka, numer telefonu: 0048 536399901, adres email: contact@whatssap.it</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.475; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Klient lub Ogłoszeniodawca&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">– osoba prawna, jednostka organizacyjna nieposiadająca</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">osobowości prawnej, a także osoba fizyczna prowadząca działalność gospodarczą, korzystająca z Usług świadczonych przez What’s SAP w związku z prowadzoną działalnością gospodarczą, jak również podmiot działający w imieniu Klienta i na jego rzecz.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Strony&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">–</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">łącznie Klient oraz What’s SAP.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="4" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.64; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Umowa&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">– umowa o świadczenie Usług zawarta pomiędzy What’s SAP a 1)</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Użytkownikiem, 2) Użytkownikiem niezalogowanym, 3) Klientem.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="5" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Usługi&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">–</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">usługi świadczone drogą elektroniczną w rozumieniu ustawy z dnia 18 lipca</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">2002 r. o świadczeniu usług drogą elektroniczną przez What’s SAP na rzecz Klienta i określone w&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">§</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;III pkt 1 Regulaminu.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="6" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Regulamin</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">– niniejszy Regulamin.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="7" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.64; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Ogłoszenie&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">– ogłoszenie o prace publikowane przez Klienta w Serwisie w ramach</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Umowy z What’s SAP mające na celu zatrudnienie pracownika na konkretne stanowisko.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;"><span style="border:none;display:inline-block;overflow:hidden;width:104px;height:1px;">
    <img src="https://lh5.googleusercontent.com/WA_Qtdrarr8s90psJM6_J-eHzK0H1q8-78Aib591izsOmZGdEvMG_w7dTSvQeZSxfluwaw8i15CrmgYNda24U2wnTWYLfev2rt6x65gAKR_xrTFKaep8BrzrK8El44v6ApKRSmepVAjFZpPPVg" width="104" height="1">
  </span></p>
<p style="text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">
    <br>
  </span></p>
<ol start="8" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -10.5pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Użytkownik</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">-</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">pełnoletnia osoba fizyczna odwiedzająca stronę Serwisu</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">i korzystająca z Usług serwisu</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="9" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -10.5pt;">
    <p dir="ltr" style="line-height: 1.2; margin-right: 18pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">RODO</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">– Rozporządzenie Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.2; margin-left: 4.45pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">§ II POSTANOWIENIA WSTĘPNE</span></p>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <ol style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -49.5pt;">
      <p dir="ltr" style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Niniejszy Regulamin określa zasady i warunki świadczenia Usług za pośrednictwem serwisu internetowego, który znajduje się pod adresem internetowym&nbsp;</span>
        <a href="about%3Ablank" style="text-decoration:none;"><span style="font-size:11pt;font-family:Arial;color:#0563c1;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">www</span><span style="font-size:11pt;font-family:Arial;color:#0563c1;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">.whatssap.it</span></a><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">zgodnie z ustawą z dnia 18 lipca 2002 r. o świadczeniu usług drogą elektroniczną</span></p>
    </li>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -18pt;padding-left: 4.449999999999999pt;">
    <p dir="ltr" style="line-height: 1.475; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">What’s SAP udostępnia Regulamin Użytkownikowi, Klientowi nieodpłatnie w formie elektronicznej przed zawarciem Umowy, a także każdorazowo na żądanie w taki sposób, który umożliwia pozyskanie, odtwarzanie i utrwalanie treści Regulaminu za pomocą systemu teleinformatycznego, którym posługuje się Użytkownik &nbsp;i Klient.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <ol start="4" style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -49.5pt;padding-left: 4.949999999999999pt;">
      <p dir="ltr" style="line-height: 1.63; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Użytkownik, i Klient są obowiązani do przestrzegania postanowień niniejszego Regulaminu.</span></p>
    </li>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -13.5pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">II WYKAZ USŁUG I WARUNKI ZAWARCIA UMOWY</span></p>
  </li>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <ol style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -31.449999999999996pt;">
      <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Przedmiotem Usług świadczonych przez What’s SAP jest:</span></p>
    </li>
  </ol>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">
    <br>
  </span></p>
<p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">a. W stosunku do Klientów:</span></p>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <ol style="margin-top:0;margin-bottom:0;">
    <ol style="margin-top:0;margin-bottom:0;">
      <li dir="ltr" style="list-style-type:lower-roman;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -58.4pt;padding-left: 0.3999999999999986pt;">
        <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Udostępnianie Serwisu do umieszczania Ogłoszeń o pracę;</span></p>
      </li>
    </ol>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <ol start="2" style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -36.7pt;">
      <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">W stosunku do &nbsp;Użytkowników:</span></p>
    </li>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <ol style="margin-top:0;margin-bottom:0;">
    <ol style="margin-top:0;margin-bottom:0;">
      <ol style="margin-top:0;margin-bottom:0;">
        <li dir="ltr" style="list-style-type:lower-roman;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -90.65pt;">
          <p dir="ltr" style="line-height: 1.4; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Udostępnianie Serwisu do przeglądania, wyszukiwania i aplikowania na zamieszczone przez Ogłoszeniodawców Ogłoszenia pracy;</span></p>
        </li>
      </ol>
    </ol>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ol start="4" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -17.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Zakazane jest używanie Serwisu w innych celach niż określone w pkt 1 wyżej, w szczególności celu promocji innych produktów lub usług.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="6" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -17.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Warunkiem koniecznym skorzystania z funkcjonalności Serwisu jest wyrażenie zgody na związanie się postanowieniami Regulaminu.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="7" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -17.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Umowa o świadczenie Usług zostaje zawarta:</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ol start="8" style="margin-top:0;margin-bottom:0;">
  <ol style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -35.9pt;">
      <p dir="ltr" style="line-height: 1.42; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">z Użytkownikiem - z chwilą prawidłowego wypełnienia formularza rejestracyjnego i zaakceptowania Regulaminu;</span></p>
    </li>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="8" style="margin-top:0;margin-bottom:0;">
  <ol start="2" style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -35.9pt;">
      <p dir="ltr" style="line-height: 1.525; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">z Klientem - z chwilą akceptacji Regulaminu. Zgodę taką może wyrazić wyłącznie Klient lub osoba upoważniona przez Klienta do zawierania prawnie wiążących Umów w jego imieniu i na jego rzecz.</span></p>
    </li>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="8" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -17.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Zapoznanie się z Ogłoszeniami o pracę nie skutkuje powstaniem umownego stosunku prawnego pomiędzy What’s SAP a osobą trzecią.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="7" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -17.95pt;">
    <p dir="ltr" style="line-height: 1.525; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Wraz z zawarciem Umowy z Klientem i dodaniem pierwszego Ogłoszenia, Serwis automatycznie utworzy Ogłoszenie Pracodawcy&nbsp;</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -17.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">III WYMOGI TECHNICZNE</span></p>
  </li>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -17.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">W celu zapewnienia prawidłowego działania Usług niezbędne jest:</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <ol style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -35.9pt;">
      <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Połączenie z siecią Internet;</span></p>
    </li>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <ol start="2" style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -35.9pt;">
      <p dir="ltr" style="line-height: 1.42; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Przeglądarka internetowa umożliwiająca wyświetlanie na ekranie komputera dokumentów HTLM;</span></p>
    </li>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <ol start="3" style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -35.9pt;">
      <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Akceptowanie plików cookies w przypadku wybranych Usług;</span></p>
    </li>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <ol start="4" style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -35.9pt;">
      <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Aktywne konto poczty elektronicznej.</span></p>
    </li>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">
    <br>
  </span></p>
<ul style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.899999999999999pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">IV WARUNKI KORZYSTANIA Z USŁUGI PRZEZ KLIENTA</span></p>
  </li>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Warunkiem korzystania z Usług świadczonych przez What’s SAP jest akceptacja Regulaminu.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Z chwilą akceptacji Regulaminu Klient:</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <ol style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -43.45pt;padding-left: 0.4499999999999993pt;">
      <p dir="ltr" style="line-height: 1.42; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Potwierdza, że dane zawarte w Ogłoszeniu o pracę są zgodne z prawdą oraz zobowiązuje się do ich niezwłocznej aktualizacji, jeżeli ulegną zmianie.</span></p>
    </li>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <ol start="2" style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -43.45pt;padding-left: 0.4499999999999993pt;">
      <p dir="ltr" style="line-height: 1.42; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Wyraża zgodę na otrzymywanie wiadomości od What’s SAP oraz wiadomości o utrudnieniach, przerwach technicznych oraz zmianach w działaniu Usługi.</span></p>
    </li>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <ol start="3" style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -43.45pt;padding-left: 0.4499999999999993pt;">
      <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Wyraża zgodę na otrzymywanie w formie elektronicznej faktur wystawianych przez What’s SAP na rzecz Klienta.</span></p>
    </li>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.899999999999999pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">V PRAWA I OBOWIĄZKI KLIENTA</span></p>
  </li>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.42; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Klient oświadcza, że zapoznał się z Regulaminem i zobowiązuje się go przestrzegać.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.42; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Klient zobowiązany jest do podania What’s SAP wszelkich informacji i materiałów niezbędnych do prawidłowego realizowania Usług. W przypadku niedostarczenia wyżej wymienionych informacji i materiałów, Serwis nie ponosi odpowiedzialności za niedotrzymanie warunków w Umowie.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Klient ponosi wyłączną odpowiedzialność za treść publikowanych Ogłoszeń rekrutacyjnych.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.899999999999999pt;padding-left: 3.8999999999999986pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">VI PRAWA I OBOWIĄZKI WHAT’S SAP</span></p>
  </li>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">What’s SAP zastrzega sobie prawo do niezrealizowania Umowy w przypadku powzięcia informacji o jej zawarciu przez osobę nieupoważnioną do reprezentacji Klienta.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.49; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">What’s SAP nie ponosi odpowiedzialności za niewykonanie lub nienależyte wykonanie Umowy, które jest następstwem okoliczności od Serwisu niezależnych. W szczególności What’s SAP nie odpowiada za niewykonanie lub nienależyte wykonanie Umowy będące następstwem przerw w dostępie lub braku dostępu do sieci Internet.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.525; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">What’s SAP zastrzega sobie prawo do przejściowego zaprzestania świadczenia Usługi ze względu na czynności techniczne związane z konserwacją bądź modyfikacją Serwisu.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="4" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.49; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">What’s SAP zastrzega sobie prawo do zaprzestania świadczenia Usług na rzecz Użytkownika oraz usunięcia jego danych. Z tytułu powyższego Użytkownikowi i Użytkownikowi &nbsp;nie będą przysługiwać żadne roszczenia wobec What’s SAP.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">
    <br>
  </span></p>
<ul style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.899999999999999pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">VII OGŁOSZENIA</span></p>
  </li>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Wszystkie pola oznaczone jako obowiązkowe powinny być wypełnione.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Formularz Ogłoszenia może wypełnić i zatwierdzić tylko osoba uprawniona do reprezentacji Klienta w zakresie prowadzenia rekrutacji.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Ogłoszenie o pracę składa się poprzez wypełnienie i zatwierdzenie formularza na</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.2; background-color: rgb(255, 255, 255); margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp; &nbsp; &nbsp; &nbsp;stronie:</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span>
  <a href="https://www.whatssap.it/employer/postjob" style="text-decoration:none;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">https://www.whatssap.it/employer/postjob</span></a>
</p>
<p dir="ltr" style="line-height: 1.2; margin-left: 21pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span></p>
<p dir="ltr" style="line-height: 1.2; margin-left: 21pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">W formularzu należy starannie opisać stanowisko pracy. Należy dodać dodatkowe informacje o projekcie lub stanowisku pracy w przeznaczonych na to oknach.&nbsp;</span></p>
<p style="text-align: justify;">
  <br>
</p>
<ol start="4" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.525; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Przygotowanie przez Serwis Ogłoszenia do publikacji następuje w sposób automatyczny, po uzupełnieniu danych, wpisaniu adresu mailowego i zatwierdzeniu regulaminu.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="5" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Ogłoszenie zostanie opublikowane w Serwisie niezwłocznie po utworzeniu ogłoszenia, a przy ogłoszeniach płatnych niezwłocznie po dokonaniu płatności drogą elektroniczną Faktura za wstawienie ogłoszenia będzie wysłana na adres e-mail Ogłoszeniodawcy niezwłocznie po wystawieniu ogłoszenia i dokonaniu za nie płatności.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="6" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.525; margin-right: 1pt; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Ogłoszenie o pracę będzie dostępne w Serwisie przez 30 dni od chwili jego opublikowania. Serwis zobowiązuje się do publikacji Ogłoszenia przez okres minimum 30 dni od dnia uiszczenia opłaty lub umieszczenia ogłoszenia bez opłat.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="7" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.525; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Osoby poszukujące pracy aplikują przez formularz aplikacyjny, podając swoje imię, nazwisko, aktualny adres email oraz załączając plik z CV. Muszą także zaakceptować niniejszy regulamin.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ol start="8" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Pracodawca może zrezygnować z korzystania z usług w każdej chwili. Może usunąć ogłoszenie, wchodząc na link, który dostał drogą elektroniczną w mailu potwierdzającym rozpoczęcie usługi. Może tam też edytować ogłoszenie, zmienić je lub poprawić.&nbsp;</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;"><span style="border:none;display:inline-block;overflow:hidden;width:164px;height:1px;">
    <img src="https://lh6.googleusercontent.com/aw2vxWZvNolPKjGE5Zdo1caxymqkUgaQXrycAD-sfVZywU8zAT2RolnRkkbiFgYv-lUiDoXmArWfFt5SMdq7VHI-zCSPUu348oRPNo7Or8VY_Cish6fuZUUX5Qggl3vMwFp3fNw48ushHPYlBQ" width="164" height="1">
  </span></p>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">§</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"><span class="Apple-tab-span" style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span></span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">VIII KLUCZOWE ELEMENTY OGŁOSZENIA</span></p>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Ogłoszenie powinno zawierać ofertę odpłatnej pracy i może dotyczyć każdej legalnej formy zatrudnienia.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Ogłoszenie powinno być sporządzone w języku angielskim.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Ogłoszenie powinno zawierać rzeczywistą ofertę pracy.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="4" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Oferowana praca oraz warunki wykonywania pracy muszą być zgodne z prawem, a oferta musi dotyczyć legalnej pracy.</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">
        <br>
      </span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.2; margin-left: 3pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">§</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"><span class="Apple-tab-span" style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span></span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">IX CENA I PŁATNOŚCI</span></p>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Usługi na rzecz Użytkowników i świadczone są nieodpłatnie.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Tytułem świadczenia Usług na rzecz Klienta, Klient zapłaci&nbsp;</span><span style="font-size:10.5pt;font-family:Arial;color:#3c4043;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">zgodną</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:10.5pt;font-family:Arial;color:#3c4043;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">z aktualnym</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:10.5pt;font-family:Arial;color:#3c4043;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">cennikiem udostępnionym na stronie Serwisu. W przypadku akcji promocyjnych, wynagrodzenie za Usługi mogą określać szczegółowe warunki danej promocji.&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Cena usługi jest ceną netto i jest wyrażona</span><span style="font-size:10.5pt;font-family:Arial;color:#3c4043;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">w walucie: polski złoty.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Płatność może być dokonana przy pomocy:</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <ol start="4" style="margin-top:0;margin-bottom:0;">
    <ol style="margin-top:0;margin-bottom:0;">
      <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -62.9pt;">
        <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">karty kredytowej (VISA, Master, Amex),</span></p>
      </li>
    </ol>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <ol start="4" style="margin-top:0;margin-bottom:0;">
    <ol start="2" style="margin-top:0;margin-bottom:0;">
      <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -62.9pt;">
        <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">karty debetowej Maestro,</span></p>
      </li>
    </ol>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <ol start="4" style="margin-top:0;margin-bottom:0;">
    <ol start="3" style="margin-top:0;margin-bottom:0;">
      <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -62.9pt;">
        <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">serwisu Paypal,</span></p>
      </li>
    </ol>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <ol start="4" style="margin-top:0;margin-bottom:0;">
    <ol start="4" style="margin-top:0;margin-bottom:0;">
      <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -62.9pt;">
        <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">przelewem bankowym,</span></p>
      </li>
    </ol>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <ol start="4" style="margin-top:0;margin-bottom:0;">
    <ol start="5" style="margin-top:0;margin-bottom:0;">
      <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -62.9pt;">
        <p dir="ltr" style="line-height: 1.63; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">przy pomocy zintegrowanego z Serwisem - serwisu przelewy24.pl z wykorzystaniem wszystkich funkcjonalności serwisu przelewy24.pl</span></p>
      </li>
    </ol>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <ol start="4" style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -44.95pt;">
      <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Operatorem kart płatniczych jest PayPro SA Agent Rozliczeniowy, ul. Kanclerska 15,</span></p>
    </li>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.49; margin: 0pt 1pt 0pt 9pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">60-327 Poznań, wpisany do Rejestru Przedsiębiorców Krajowego Rejestru Sądowego prowadzonego przez Sąd Rejonowy Poznań Nowe Miasto i Wilda w Poznaniu, VIII Wydział Gospodarczy Krajowego Rejestru Sądowego pod numerem KRS 0000347935, NIP 7792369887, Regon 301345068 2.</span></p>
<p style="text-align: justify;">
  <br>
</p>
<ol start="5" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">W przypadku wyrażania woli przez Klienta, aby nie publikować Ogłoszenia lub usunąć Ogłoszenie z Serwisu przed upływem 30 dni, nie przysługuje zwrot zapłaconej kwoty.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="6" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Klient może skontaktować się z Serwisem w celu ustalenia indywidualnej ceny za zakup pakietu Ogłoszeń, czyli wykupieniu więcej niż jednego ogłoszenia.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="7" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Klient zarejestrowany dla celów podatku VAT w kraju UE innym niż Polska jest zobowiązany podać aktualny numer identyfikacyjny podatkowej - NIP.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.899999999999999pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">X PRAWA AUTORSKIE KLIENTA</span></p>
  </li>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.2; margin-left: 3pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">1.</span><span style="font-size:10pt;font-family:'Times New Roman';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"><span class="Apple-tab-span" style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span></span><span style="font-size:10.5pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Ogłoszeniodawca oświadcza, że:</span></p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;"><span style="font-size:10.5pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">
    <br>
  </span></p>
<ol style="margin-top:0;margin-bottom:0;">
  <ol style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -29.15pt;padding-left: 0.14999999999999858pt;">
      <p dir="ltr" style="line-height: 1.42; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Ogłoszenie, które ma zamiar opublikować, nie narusza praw osób trzecich, w szczególności praw autorskich i dóbr osobistych osób trzecich;</span></p>
    </li>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <ol start="2" style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -29.15pt;padding-left: 0.14999999999999858pt;">
      <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">dysponuje odpowiednimi majątkowymi prawami autorskimi do nazw handlowych oraz znaków graficznych i słownych podanych w Ogłoszeniu lub na koncie.</span></p>
    </li>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.45; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Klient udziela Serwisowi bezpłatnej, nieograniczonej czasowo i terytorialnie niewyłącznej licencji na używanie jego nazw handlowych (nazwy firmy) i znaków graficznych i słownych przekazanych do publikacji w ramach realizacji Umowy oraz w celu podejmowania działań promocyjnych Ogłoszenia Klienta na następujących polach eksploatacji: zwielokrotnianie, publiczne odtworzenie i wyświetlanie, publiczne udostępnienie za pośrednictwem Serwisu oraz portali i narzędzi wykorzystywanych w ramach działań promocyjnych w taki sposób , aby każdy mógł mieć do niego dostęp w miejscu i czasie przez siebie wybranym.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.45; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Klient udziela What’s SAP bezpłatnej, nieograniczonej czasowo i terytorialnie niewyłącznej licencji zezwalającej na wykorzystywanie jego nazwy (firmy) oraz znaków graficznych (logotypów) w ramach Serwisu, listy referencyjnej oraz w materiałach marketingowych na następujących polach eksploatacji: zwielokrotnianie, publiczne wystawienie, wyświetlanie oraz publiczne udostępnienie w taki sposób, aby każdy mógł mieć do niego dostęp w miejscu i czasie przez siebie wybranym. Klient ma prawo do wypowiedzenia niniejszej licencji w formie pisemnej pod rygorem nieważności z zachowaniem 3-miesięcznego terminu wypowiedzenia bez wpływu na zgodność z prawem przetwarzania przed jej wycofaniem.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.2; margin-left: 3pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">§</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"><span class="Apple-tab-span" style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span></span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">XI USUNIĘCIE OGŁOSZENIA Z SERWISU</span></p>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Serwis może w każdej chwili usunąć Ogłoszenie z przyczyn leżących po stronie Klienta i bez podania przyczyny.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Przyczyną leżącą po stronie Klienta jest naruszenie niniejszego Regulaminu lub powszechnie obowiązującego prawa przez treść lub formę Ogłoszenia.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.49; margin-right: 1pt; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">W przypadku usunięcia Ogłoszenia z przyczyn leżących po stronie Klienta Serwis co najmniej na 24 godziny przed usunięciem Ogłoszenia poinformuje Klienta o planowanym wykasowaniu Ogłoszenia i wezwie go do usunięcia naruszenia pod rygorem usunięcia Ogłoszenia z Serwisu.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="4" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.525; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Serwis nie ma obowiązku wcześniejszego poinformowania Klienta o usunięciu Ogłoszenia, gdy dotyczy to sytuacji, kiedy usunięcie ma na celu uniknięcie poniesienia konsekwencji prawnych.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="5" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Tytułem usunięcia Ogłoszenia z przyczyn leżących po stronie Klienta nie przysługuje żadne roszczenie wobec Serwisu.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">
    <br>
  </span></p>
<ol start="6" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.525; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">W przypadku usunięcia Ogłoszenia z przyczyn leżących po stronie Serwisu, Klient otrzyma zwrot ceny w wysokości proporcjonalnej do okresu braku wyświetlania Ogłoszenia w Serwisie.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.899999999999999pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">XII KANDYDAT</span></p>
  </li>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.525; margin-right: 1pt; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Kandydatem jest Użytkownik, który wyraża wolę udziału w rekrutacji na stanowisko określone w Ogłoszeniu oraz złoży w Serwisie aplikację o pracę.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Kandydat może aplikować na stanowisko określone w Ogłoszeniu bezpośrednio w formularzu umieszczonym pod Ogłoszeniem.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Kandydat może prowadzić własną działalność gospodarczą.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="4" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Serwis tytułem świadczenia Usług na rzecz Kandydata nie pobiera jakichkolwiek opłat.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="5" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Wysłanie aplikacji do Ogłoszeniodawcy przez Kandydata następuje automatycznie.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.2; margin-left: 3pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">§</span><span style="font-size:10pt;font-family:'Times New Roman';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"><span class="Apple-tab-span" style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span></span><span style="font-size:10.5pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">XIII SKŁADANIE APLIKACJI O PRACĘ</span></p>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Informacje podane w aplikacji powinny być prawdziwe.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Zakazane jest składanie pozornych aplikacji o pracę.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Formularz aplikacyjny służy wyłącznie do składania aplikacji o pracę.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="4" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Do złożenia aplikacji z wymagane jest podanie: imienia, nazwiska, adresu e-mail oraz</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Wysłanie pliku z CV.&nbsp;</span></p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.2; margin-left: 3pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">§</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"><span class="Apple-tab-span" style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span></span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">XIV ODPOWIEDZIALNOŚCI</span></p>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Serwis nie ponosi odpowiedzialności za treść złożonych Ogłoszeń.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Podanie błędnych lub niepełnych danych identyfikacyjnych przez Klienta może skutkować brakiem realizacji lub nieprawidłową realizacją zamówionej Usługi.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Serwis nie gwarantuje Klientowi, że ktokolwiek złoży aplikację o pracę.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="4" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Serwis nie gwarantuje Użytkownikowi i Użytkownikowi niezalogowanemu, że znajdzie za jego pośrednictwem pracę.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">
    <br>
  </span></p>
<ol start="5" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Serwis internetowy jest udostępniany w formule „as is”, czyli jest dostępny w wersji aktualnej mogącej zawierać wady i nie ma lepszej wersji alternatywnej.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="6" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Serwis nie udziela jakiejkolwiek gwarancji jakości na jego Usługi.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="7" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.525; margin-right: 1pt; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Serwis nie gwarantuje, że serwery przez niego wykorzystywane są wolne od szkodliwego oprogramowania, dlatego nie ponosi odpowiedzialności za szkodę przez nie spowodowaną, jak i przez ataki hakerskie.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="8" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Serwis zastrzega sobie prawo do czasowego nieświadczenia Usług.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="9" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">What’s SAP ma prawo do wprowadzania przerw technicznych w działaniu Serwisu.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.899999999999999pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">XV OCHRONA DANYCH OSOBOWYCH</span></p>
  </li>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -18pt;">
    <p dir="ltr" style="line-height: 1.42; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">What’s SAP przetwarza dane osobowe Użytkownika i Klienta w zakresie niezbędnym do prawidłowej realizacji Usług określonych niniejszym Regulaminem.&nbsp;</span></p>
  </li>
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Klient jest administratorem danych w rozumieniu art. 4 pkt 7 RODO:</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <ol style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -22.4pt;padding-left: 0.3999999999999986pt;">
      <p dir="ltr" style="line-height: 1.42; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;Użytkowników, którzy zaaplikowali na jego Ogłoszenie o pracę,</span></p>
    </li>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <ol start="2" style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -22.4pt;padding-left: 0.3999999999999986pt;">
      <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Pracowników Klienta przetwarzanych w Serwisie</span></p>
    </li>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 3pt;">
    <p dir="ltr" style="line-height: 1.42; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">W tego względu, iż realizacja Usług wymaga przetwarzania przez What’s SAP w imieniu Klienta danych osobowych Użytkowników korzystających z formularza aplikacji znajdującego się bezpośrednio pod Ogłoszeniem Klienta oraz Pracowników Klienta w zakresie określonym w ustępie wyżej, zawarcie Umowy między Stronami oznacza równoczesne zawarcie umowy powierzenia przetwarzania danych</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="4" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.53; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Klient jako administrator danych zobowiązany jest do wykonania wobec podmiotów określonych w § XV&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">ust. 2 obowiązku informacyjnego, w szczególności do</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">zamieszczenia klauzuli informacyjnej pod formularzem Ogłoszenia.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="5" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Klient ponosi wyłączną odpowiedzialność za treść klauzuli informacyjnej kierowanej do Użytkowników i Użytkowników niezalogowanych i nie przysługują mu wobec Serwisu żadne roszczenia w związku z wykorzystaniem udostępnionego przez Serwis wzoru klauzuli.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="6" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.49; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">W związku z podejmowaniem czynności niezbędnych do wykonania Umowy oraz do podjęcia działań przed jej zawarciem, Klient i What’s SAP wzajemnie udostępniają sobie dane służbowe (imię, nazwisko, adres e-mail, nr telefonu) wybranych przedstawicieli uprawnionych do kontaktu w związku z realizacją przedmiotu Umowy na podstawie</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">
    <br>
  </span></p>
<p dir="ltr" style="line-height: 1.525; margin: 0pt 1pt 0pt 21pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">uzasadnionego interesu polegającego na prawidłowej realizacji umowy oraz wymianie informacji niezbędnych do podnoszenia jakości świadczonych Usług (art. 6 ust. 1 lit. f RODO).</span></p>
<p style="text-align: justify;">
  <br>
</p>
<ol start="7" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.49; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Klient zobowiązuje się do samodzielnego wypełnienia wobec osób wskazanych w ust. 6 wszelkich obowiązków informacyjnych wymaganych przepisami RODO oraz zwolni What’s SAP na podstawie art. 14 ust. 5 lit a) RODO ze wszelkich obowiązków informacyjnych wobec tych osób.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.2; margin-left: 3pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">§</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"><span class="Apple-tab-span" style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span></span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">XVI REKLAMACJE</span></p>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Klient i Kandydat są uprawnienia w każdej chwili do złożenia reklamacji względem świadczonych usług przez Serwis.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">W przypadku niezgodności świadczonej usługi z zakupioną usługą, Klient ma prawo zażądać usunięcia niezgodności lub obniżenia ceny usługi za okres niezgodności.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.475; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Reklamacja może być złożona w formie pisemnej na adres wskazany w § 1 ust. 1 Regulaminu albo w formie e-mail na adres wskazany w § 1 ust. 1 Regulaminu. Reklamacja musi zawierać dane niezbędne do jej realizacji, tj. Nazwę firmy Klienta, opis niezgodności bądź naruszenia oraz proponowany sposób rozpatrzenia reklamacji i okoliczności uzasadniające reklamację.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="4" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Czas rozpatrzenia reklamacji wynosi 21 dni roboczych od daty otrzymania przez Serwis prawidłowej reklamacji.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.9pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">XVII ROZWIĄZANIE UMOWY LUB ODSTĄPIENIE OD UMOWY</span></p>
  </li>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <ol style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -35.9pt;">
      <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Umowa o świadczenie Usług może być rozwiązana przez którąkolwiek ze Stron.</span></p>
    </li>
  </ol>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <ol start="2" style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -35.9pt;">
      <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Użytkownik &nbsp;ma prawo rozwiązać umowę w dowolnym momencie poprzez zaprzestanie korzystania z Usług.</span></p>
    </li>
  </ol>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp; &nbsp; &nbsp; 3.What’s SAP ma prawo rozwiązać Umowę w trybie natychmiastowym w przypadku:</span></p>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <ol style="margin-top:0;margin-bottom:0;">
    <ol style="margin-top:0;margin-bottom:0;">
      <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -35.9pt;">
        <p dir="ltr" style="line-height: 1.63; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">naruszenia przez Użytkownika lub Klienta istotnych postanowień Regulaminu;</span></p>
      </li>
    </ol>
  </ol>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;"><span style="border:none;display:inline-block;overflow:hidden;width:72px;height:1px;">
    <img src="https://lh3.googleusercontent.com/lY_tbyrxnE_VZ6R1LiKb8ofXivb3ZfZS3U5bfF6_Z35EqGRhHuqGMvgWusO2s9oQpY6ypI3Y_Tyka6W1CBNdQV9Kh74RUucoKeGBObmZiFLU5g9FVzwYVkGOKaXhAzn86FeVYkRUGnszMJImTQ" width="72" height="1">
  </span></p>
<p style="text-align: justify;"><span style="font-size:10pt;font-family:'Times New Roman';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">
    <br>
  </span></p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 36.1pt;">
    <p dir="ltr" style="line-height: 1.42; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">powzięcia wiarygodnych informacji, że dane podane przy wstawianiu ogłoszenia Pracodawcy lub są nieprawdziwe lub naruszają dobra osobiste osób trzecich.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 36.1pt;">
    <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">wystąpienia innych przyczyn w sposób obiektywny uniemożliwiających świadczenie Usługi.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.899999999999999pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">XVIII INFORMACJA HANDLOWA</span></p>
  </li>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;"><span style="border:none;display:inline-block;overflow:hidden;width:72px;height:1px;">
    <img src="https://lh3.googleusercontent.com/lY_tbyrxnE_VZ6R1LiKb8ofXivb3ZfZS3U5bfF6_Z35EqGRhHuqGMvgWusO2s9oQpY6ypI3Y_Tyka6W1CBNdQV9Kh74RUucoKeGBObmZiFLU5g9FVzwYVkGOKaXhAzn86FeVYkRUGnszMJImTQ" width="72" height="1">
  </span></p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.525; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Serwis wysyła pocztą elektroniczną informację handlową do Klientów, Użytkowników, którzy wyrazili na to zgodę. Informacja handlowa dotyczy Usług świadczonych przez Serwis.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.525; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Klient i Użytkownik mogą bez podania przyczyny w każdej chwili odwołać swoją zgodę na otrzymywanie informacji handlowej poprzez wysłanie maila na adres poczty elektronicznej podanej w § 1 ust. 1 Regulaminu.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.49; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Zgoda, o której mowa w pkt. 2-3 jest zgodą na otrzymywanie informacji handlowej na podany adres poczty elektronicznej w rozumieniu art. 172 ust. 1 ustawy z dnia 16 lipca 2004 r. Prawo telekomunikacyjne oraz art. 10 ust. 2 ustawy z dnia 18 lipca 2002 r. o świadczeniu usług drogą elektroniczną.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.899999999999999pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">XIX PRAWA AUTORSKIE SERWISU</span></p>
  </li>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Przyjęty na stronie Serwisu What’s SAP (www.justjoin.it) układ i formuła udostępnianych treści stanowi samoistny przedmiot ochrony prawa autorskiego.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.49; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Wykorzystywanie indywidualnych marketów w formie głównych technologii języków programowania, a także prezentacja ich na mapie, stanowi autorskie rozwiązanie Serwisu, wcześniej nie wykorzystywane w takiej formie przez żaden inny serwis i stanowi samoistny przedmiot ochrony prawno-autorskiej.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Wszelkie prawa do treści, w tym do jego elementów graficznych, wyboru i układ stron oraz innych elementów Serwisu są zastrzeżone.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="4" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Osoby trzecie nie są uprawnione do kopiowania, modyfikowania, reprodukcji, dystrybucji lub pobierania w całości lub części treści Serwisu.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.899999999999999pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">XX POSTANOWIENIA KOŃCOWE</span></p>
  </li>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">
    <br>
  </span></p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Serwis zastrzega sobie prawo do dokonywania zmian w treści Regulaminu, w tym zmian zakresu świadczonych Usług i ich cen.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Serwis zastrzega sobie prawo umieszczania treści reklamowych na stronie&nbsp;</span>
      <a href="https://www.whatssap.it" style="text-decoration:none;"><span style="font-size:11pt;font-family:Arial;color:#0563c1;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">www.whatssap.it</span></a><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;w formach zwyczajowo stosowanych w Internecie.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Wobec wszystkich spraw dotyczących korzystania z Usług Serwisu mają zastosowanie odpowiednie przepisy prawa obowiązującego na terytorium Rzeczypospolitej Polskiej.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="4" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.525; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Sądem właściwym do rozpatrywania sporów wynikających ze stosowania Regulaminu oraz świadczenia Usług przez Serwis jest Sąd właściwy dla siedziby Serwisu, jeżeli nie znajdzie zastosowania właściwość wyłączna.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Załączniki:</span></p>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Załącznik nr 1 – Umowa powierzenia przetwarzania danych osobowych</span></p>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.2; margin-right: -2.95pt; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Załącznik nr 1 do Regulaminu</span></p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:13.999999999999998pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">UMOWA POWIERZENIA PRZETWARZANIA DANYCH OSOBOWYCH</span></p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.2; margin-right: 9pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Zawarta pomiędzy Klientem wskazanym w Regulaminie świadczenia usług elektronicznych w serwisie internetowym&nbsp;</span><span style="font-size:10pt;font-family:Calibri,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">whatssap.it</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;do którego załącznik stanowi niniejsza Umowa</span></p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;"><span style="border:none;display:inline-block;overflow:hidden;width:93px;height:1px;">
    <img src="https://lh5.googleusercontent.com/976ATNHfH8ITK6Y-_-sXUJ6SStey19EwJ7763JnDEC4la88lZ9E3HMw0wXIHtsEyxf1EzIfRyU9hRLzFLQ8mpN5JfltZQ06EzyO0EyS47a1H6k9ht3vlgjrqTFb2RahzYnxV3x3mn5JgfPBclw" width="93" height="1">
  </span></p>
<p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Powierzenia, zwanym w dalszej części&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">“Klientem”</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">lub “Administratorem danych”</span></p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">a</span></p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">What’s SAP&nbsp;</span>
  <a href="https://www.whatssap.it" style="text-decoration:none;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">www.whatssap.it&nbsp;</span></a><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">prowadzony przez Amity Consulting Przemysław Święcicki Z siedzibą w Kole przy ul. Buczka 18, 62-600, NIP 7792495853, REGON 381306643, osoba reprezentująca firmę: Marika Gajewska-Święcicka, numer telefonu: 0048 536399901, adres email: contact@whatssap.it</span></p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">
    <br>
  </span></p>
<p dir="ltr" style="line-height: 1.2; margin-left: 3pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">§</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"><span class="Apple-tab-span" style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span></span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">I DEFINICJE</span></p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.63; margin: 0pt 3pt 0pt 21pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Na potrzeby niniejszej Umowy Powierzenia przyjęto następujące znaczenie poniższych sformułowań:</span></p>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.64; margin-right: 2pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Administrator danych, Klient&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">– podmiot, który samodzielnie lub wspólnie z innymi</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">ustala cele i sposoby przetwarzania danych osobowych.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Dane Osobowe&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">–</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">rozumie się przez to wszelkie informacje o zidentyfikowanej lub</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.2; margin-left: 21pt; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">możliwej do zidentyfikowania osobie fizycznej („</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">osobie,</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">której dane dotyczą”</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">)</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;powierzone do przetwarzania przez Klienta firmie What’s SAP w związku z realizacją Umowy i na podstawie niniejszej Umowy Powierzenia.</span></p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">EOG</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">– Europejski Obszar Gospodarczy.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ol start="4" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.495; margin-right: 3pt; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Naruszenie&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">- naruszenie bezpieczeństwa prowadzące do przypadkowego lub</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">niezgodnego z prawem zniszczenia, utracenia, zmodyfikowania, nieuprawnionego ujawnienia lub nieuprawnionego dostępu do Danych Osobowych przesyłanych, przechowywanych lub w inny sposób przetwarzanych;</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="5" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.53; margin-right: 3pt; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Podmiot przetwarzający&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">– oznacza firmę What’s SAP, która przetwarza Dane</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Osobowe w imieniu i na wyraźne polecenie Klienta w związku ze świadczeniem Usług określonych w Regulaminie;</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="6" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.64; margin-right: 3pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Pracownik&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">– każda osoba świadcząca pracę niezależnie od podstawy prawnej</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">wykonywania tej pracy;</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="7" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.53; margin-right: 2pt; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Podwykonawca&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">- podmiot, któremu What’s SAP powierza Dane Osobowe w dalsze</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">przetwarzanie i z którego usług korzysta do wykonania na rzecz Klienta konkretnych czynności przetwarzania Danych Osobowych;</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="8" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.46; margin-right: 2pt; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Przetwarzanie danych&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">– rozumie się przez to operację lub zestaw operacji</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">wykonywanych na danych osobowych lub zestawach danych osobowych w sposób zautomatyzowany lub niezautomatyzowany, taką jak zbieranie, utrwalanie, organizowanie, porządkowanie, przechowywanie, adaptowanie lub modyfikowanie, pobieranie, przeglądanie, wykorzystywanie, ujawnianie poprzez przesłanie, rozpowszechnianie lub innego rodzaju udostępnianie, dopasowywanie lub łączenie, ograniczanie, usuwanie lub niszczenie;</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="9" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.64; margin-right: 2pt; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">RODO&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">– Rozporządzenie Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">
    <br>
  </span></p>
<p dir="ltr" style="line-height: 1.63; margin-left: 21pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">danych osobowych i w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE;</span></p>
<p style="text-align: justify;">
  <br>
</p>
<ol start="10" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Strony</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">– oznacza łącznie What’s SAP i Klienta</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ol start="11" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Organizacje międzynarodowe&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">-</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">oznacza organizację i organy jej podlegające</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">działające na podstawie prawa międzynarodowego publicznego lub inny organ powołany w drodze umowy między co najmniej dwoma państwami lub na podstawie takiej umowy;</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ol start="12" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Umowa&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">–</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Umowa zawarta przez Strony na podstawie akceptacji Regulaminu w związku</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">z realizacją Usług;</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ol start="13" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Umowa Powierzenia</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">– niniejsza umowa;</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.63; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Pojęcia użyte w Umowie Powierzenia i pisane wielką literą mają znaczenie przypisane im w treści Umowy Powierzenia oraz w Regulaminie.</span></p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -17.95pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">II PRZEDMIOT UMOWY</span></p>
  </li>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <ol style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -50.95pt;">
      <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Na podstawie niniejszej Umowy Powierzenia Klient powierza What’s SAP przetwarzanie następującego kategorii Danych Osobowych wskazanych kategorii osób:</span></p>
    </li>
  </ol>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <ol style="margin-top:0;margin-bottom:0;">
    <ol style="margin-top:0;margin-bottom:0;">
      <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -35.9pt;">
        <p dir="ltr" style="line-height: 1.45; margin-right: 38pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;Użytkownicy, którzy zaaplikowali na Ogłoszenie Klienta:</span></p>
        <ol style="margin-top:0;margin-bottom:0;">
          <li dir="ltr" style="list-style-type:lower-roman;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -41.349999999999994pt;padding-left: 5.349999999999994pt;">
            <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Imię i nazwisko</span></p>
          </li>
        </ol>
      </li>
    </ol>
  </ol>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <ol style="margin-top:0;margin-bottom:0;">
    <ol start="2" style="margin-top:0;margin-bottom:0;">
      <ol start="2" style="margin-top:0;margin-bottom:0;">
        <li dir="ltr" style="list-style-type:lower-roman;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -46.25pt;padding-left: 10.25pt;">
          <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Adres e-mail</span></p>
        </li>
      </ol>
    </ol>
  </ol>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <ol style="margin-top:0;margin-bottom:0;">
    <ol start="2" style="margin-top:0;margin-bottom:0;">
      <ol start="3" style="margin-top:0;margin-bottom:0;">
        <li dir="ltr" style="list-style-type:lower-roman;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -46.849999999999994pt;padding-left: 10.849999999999994pt;">
          <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Wszelkie inne dane przekazane przez Kandydatów w CV</span></p>
        </li>
      </ol>
    </ol>
  </ol>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <ol style="margin-top:0;margin-bottom:0;">
    <ol start="2" style="margin-top:0;margin-bottom:0;">
      <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -35.9pt;">
        <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Pracownicy Klienta:</span></p>
      </li>
    </ol>
  </ol>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <ol style="margin-top:0;margin-bottom:0;">
    <ol style="margin-top:0;margin-bottom:0;">
      <ol style="margin-top:0;margin-bottom:0;">
        <li dir="ltr" style="list-style-type:lower-roman;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -41.349999999999994pt;padding-left: 5.349999999999994pt;">
          <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Imię i nazwisko</span></p>
        </li>
      </ol>
    </ol>
  </ol>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <ol style="margin-top:0;margin-bottom:0;">
    <ol style="margin-top:0;margin-bottom:0;">
      <ol start="2" style="margin-top:0;margin-bottom:0;">
        <li dir="ltr" style="list-style-type:lower-roman;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -43.8pt;padding-left: 7.799999999999997pt;">
          <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Stanowisko</span></p>
        </li>
      </ol>
    </ol>
  </ol>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <ol style="margin-top:0;margin-bottom:0;">
    <ol style="margin-top:0;margin-bottom:0;">
      <ol start="3" style="margin-top:0;margin-bottom:0;">
        <li dir="ltr" style="list-style-type:lower-roman;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -46.25pt;padding-left: 10.25pt;">
          <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Wizerunek</span></p>
        </li>
      </ol>
    </ol>
  </ol>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <ol style="margin-top:0;margin-bottom:0;">
    <ol style="margin-top:0;margin-bottom:0;">
      <ol start="4" style="margin-top:0;margin-bottom:0;">
        <li dir="ltr" style="list-style-type:lower-roman;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -46.849999999999994pt;padding-left: 10.849999999999994pt;">
          <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Inne dane zamieszczone &nbsp;w korespondecji &nbsp; elektronicznej</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">
              <br>
            </span></p>
        </li>
      </ol>
    </ol>
  </ol>
</ul>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Podmiot przetwarzający jest uprawniony do przetwarzania Danych Osobowych wyłącznie w formie elektronicznej.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.475; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Dane określone w § 2 ust. 1 lit. a Umowy Powierzenia będą przetwarzane tylko przy złożeniu aplikacji o pracę, a po tym okresie będą automatycznie usuwane.&nbsp;</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.899999999999999pt;">
    <p dir="ltr" style="line-height: 1.7; margin-right: 35pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">III WARUNKI POWIERZENIA DANYCH OSOBOWYCH DO PRZETWARZANIA I OŚWIADCZENIA STRON</span></p>
  </li>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Klient powierza What’s SAP przetwarzanie Danych Osobowych wyłącznie w celu i na potrzeby realizacji Usług określonych w Regulaminie.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.475; margin-right: 1pt; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Klient oświadcza, że jest uprawniony do powierzenia przetwarzania Danych Osobowych Podmiotowi przetwarzającemu w ramach Umowy Powierzenia, a także, że wskazane powierzenie nie narusza przepisów prawa ani praw osób trzecich.&nbsp;</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.525; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Klient jako Administrator danych ponosi wyłączną odpowiedzialność za spełnienie wobec Użytkowników obowiązków informacyjnych zgodnie z art. 12-14 RODO.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="4" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.49; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Strony zgodnie przyjmują, iż zawarcie niniejszej Umowy Powierzenia stanowi udokumentowane polecenie Klienta do przetwarzania przez What’s SAP Danych Osobowych w celu realizacji Usługi i w sposób określony w Regulaminie i niniejszej Umowie Powierzenia.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="5" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.525; margin-right: 1pt; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Podmiot przetwarzający zobowiązuje się do zabezpieczenia Danych Osobowych poprzez stosowanie odpowiednich środków technicznych i organizacyjnych zapewniających adekwatny stopień bezpieczeństwa zgodnie z art. 32 RODO.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="6" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.525; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Klient odpowiada za prawidłowe wykonywanie obowiązków Administratora zgodnie z RODO, innymi właściwymi przepisami ochrony danych osobowych i niniejszą Umową Powierzenia.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">
    <br>
  </span></p>
<ol start="7" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.525; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">What’s SAP odpowiada za prawidłowe wykonywanie obowiązków Podmiotu przetwarzającego zgodnie z RODO, innymi właściwymi przepisami ochrony danych osobowych i niniejszą Umową Powierzenia.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.899999999999999pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">IV OBOWIĄZKI WHAT’S SAP W ZAKRESIE POMOCY KLIENTOWI</span></p>
  </li>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.49; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Biorąc pod uwagę charakter przetwarzania, What’s SAP w miarę możliwości pomoże Klientowi, poprzez odpowiednie środki techniczne i organizacyjne, wywiązać się z obowiązku odpowiadania na żądania osoby, której dane dotyczą, w zakresie wykonywania jej praw określonych w III rozdziale RODO.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.525; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">What’s SAP, przy uwzględnieniu charakteru przetwarzania oraz dostępnych mu informacji, pomaga Klientowi wywiązać się z obowiązków określonych w art. 32 – 36 RODO.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Serwis niezwłocznie informuje Administratora, jeżeli jego zdaniem wydane mu polecenie stanowi naruszenie Rozporządzenia RODO lub innych przepisów o ochronie danych.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <ol start="4" style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -49.45pt;padding-left: 0.4499999999999993pt;">
      <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">W przypadku stwierdzenia Naruszenia ochrony Danych Osobowych What’s SAP powiadomi Klienta niezwłocznie o stwierdzonym Naruszeniu.</span></p>
    </li>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.899999999999999pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">V PRAWO AUDYTU</span></p>
  </li>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.42; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Strony zgodnie postanawiają, że na podstawie art. 28 ust. 3 lit. h RODO Klientowi przysługują następujące uprawnienia:</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <ol style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 0.10000000000000142pt;">
      <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">żądania od What’s SAP informacji dotyczących realizacji Umowy Powierzenia,</span></p>
    </li>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <ol start="2" style="margin-top:0;margin-bottom:0;">
    <li dir="ltr" style="list-style-type:lower-alpha;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 0.10000000000000142pt;">
      <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">przeprowadzania audytów na zasadach określonych w niniejszym paragrafie.</span></p>
    </li>
  </ol>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.475; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Audyt dotyczący prawidłowości przetwarzania Danych Osobowych przez What’s SAP może być przeprowadzany przez Klienta po uprzednim pisemnym powiadomieniu Podmiotu Przetwarzającego na co najmniej 14 dni roboczych przed planowaną datą rozpoczęcia audytu, wskazując dokładny zakres, termin oraz osoby upoważnione przez Klienta do przeprowadzenia audytu.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.49; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Audyt może być realizowany wyłącznie w dni robocze i w godzinach pracy What’s SAP. Audyt może być przeprowadzany nie częściej niż 2 razy w roku kalendarzowym, chyba że Klient ma uzasadnione podejrzenie dotyczące ewentualnych Naruszeń. Wszelkie koszty związane z przeprowadzeniem audytu obciążają Klienta.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">
    <br>
  </span></p>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.899999999999999pt;">
    <p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">VI POUFNOŚĆ</span></p>
  </li>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-right: 1pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">What’s SAP zobowiązuje się do zachowania w tajemnicy wszelkich Danych Osobowych przekazanych lub udostępnionych w związku z realizacją Umowy Powierzenia.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.525; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">What’s SAP zapewnia, że dopuści do przetwarzania Danych Osobowych wyłącznie osoby, których dostęp do Danych Osobowych jest niezbędny dla realizacji przedmiotu Umowy po wydaniu im stosownych upoważnień do przetwarzania danych.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="3" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.49; margin-right: 1pt; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">What’s SAP zapewnia, że osoby upoważnione do przetwarzania Danych Osobowych zobowiążą się do zachowania tajemnicy przetwarzanych Danych Osobowych. Obowiązek zachowania tajemnicy nie ustaje po zaprzestaniu przetwarzania Danych Osobowych i rozwiązaniu łączącej strony umowy.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ul style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.899999999999999pt;">
    <p dir="ltr" style="line-height: 1.7; margin-right: 2pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">VIII PRZEKAZYWANIE DANYCH OSOBOWYCH POZA EOG LUB DO ORGANIZACJI MIĘDZYNARODOWYCH</span></p>
  </li>
</ul>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">
    <br>
  </span></p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">What’s SAP oświadcza, że Dane Osobowe nie będą przekazywane poza EOG lub do organizacji międzynarodowej w rozumieniu RODO bez uprzedniej zgody Klienta.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.2; margin-left: 3pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">§</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"><span class="Apple-tab-span" style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span></span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">IX CZAS OBOWIĄZYWANIA UMOWY POWIERZENIA</span></p>
<p style="text-align: justify;">
  <br>
</p>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-right: 38pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Niniejsza Umowa Powierzenia zostaje zawarta na czas obowiązywania umowy o świadczenie Usług.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<ol start="2" style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.49; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">W ciągu 30 dni od rozwiązania niniejszej Umowy Powierzenia What’s SAP usunie lub zwróci Klientowi wszelkie dane osobowe oraz usunie ich istniejące kopie, chyba że obowiązujące przepisy prawa nakazują przechowywanie tych Danych Osobowych lub ich części.</span></p>
  </li>
</ol>
<p style="text-align: justify;">
  <br>
</p>
<p dir="ltr" style="line-height: 1.2; margin-left: 3pt; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">§</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"><span class="Apple-tab-span" style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span></span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">X POSTANOWIENIA KOŃCOWE</span></p>
<p style="text-align: justify;">
  <br>
</p>
<ol style="margin-top:0;margin-bottom:0;">
  <li dir="ltr" style="list-style-type:decimal;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: -14.95pt;">
    <p dir="ltr" style="line-height: 1.63; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">W sprawach nieuregulowanych niniejszą Umową zastosowanie będą miały odpowiednie przepisy RODO oraz Regulaminu.</span></p>
  </li>
</ol>           
                
                

              </center>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** TERMS MODAL ***-->