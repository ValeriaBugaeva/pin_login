@extends('layouts/contentLayoutMaster')


@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/wizard/bs-stepper.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/animate/animate.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/sweetalert2.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
  <link rel="stylesheet" href="../../../company/modal-staff.css">
  <link rel="stylesheet" href="{{asset(mix('css/base/plugins/extensions/ext-component-sweet-alerts.css'))}}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-pickadate.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-user.css')) }}">
@endsection

@section('content')
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#large">
              Edit Staff
              </button>
              <!-- Modal -->
              <div
                class="modal fade text-left"
                id="large"
                tabindex="-1"
                role="dialog"
                aria-labelledby="myModalLabel17"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel17">Edit Location</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <section class="vertical-wizard">
  <div class="bs-stepper vertical vertical-wizard-example">
    <div class="bs-stepper-header">
      <div class="step" data-target="#account-details-vertical">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">1</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Location Details</span>
            <span class="bs-stepper-subtitle">Setup Location Details</span>
          </span>
        </button>
      </div>
      <div class="step" data-target="#personal-info-vertical">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">2</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Location Info</span>
            <span class="bs-stepper-subtitle">Add Address Info</span>
          </span>
        </button>
      </div>
      <div class="step" data-target="#wage-step-vertical">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">3</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Convention collective</span>
            <span class="bs-stepper-subtitle">Convention collective</span>
          </span>
        </button>
      </div>
      <div class="step" data-target="#salary-links-vertical">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">4</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Shift & Goals</span>
            <span class="bs-stepper-subtitle">Shift & Productivity</span>
          </span>
        </button>
      </div>
    </div>
    <div class="bs-stepper-content">
      <div id="account-details-vertical" class="content">
        <div class="content-header">
          <h5 class="mb-0">Location Details</h5>
          <small class="text-muted">Setup Location Details</small>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
          <label for="name">Company Name</label>
            <input type="text" id="name" value="Google Corp." required name="name"  class="form-control" placeholder=">Company Name"/>
            </div>
            <div class="form-group col-md-6">
            <label for="lastname">Immatriculation</label>
            <input type="text" id="immatriculation" value="6544470HF55" name="immatriculation"  class="form-control" placeholder="Immatriculation"/>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
          <label>Médecine du travail</label>
              <select class="select2 form-control form-control-lg" id="medicine" name="medicine">
        <option></option><option value="01">MEDECINE INTERNE ETABLISSEMENT</option><option value="001">001 - 1 AST ALSACE SANTE AU TRAVAIL</option><option value="002">002 - AIMT DU PORT DU RHIN</option><option value="003">003 - ACST ASSOCIATION DE CONSEIL EN SANTE AU TRAVAIL</option><option value="004">004 - SPST CENTRE ALSACE COLMAR</option><option value="005">005 - AMT DE LA REGION DE CERNAY</option><option value="006">006 - AMT DE THANN ET ENVIRONS</option><option value="007">007 - AMT DE LA REGION FRONTALIERE SAINT- LOUIS</option><option value="008">008 - AMT DE MASEVAUX ET ENVIRONS</option><option value="009">009 - AIMT DU SUNDGAU A ALTKIRCH</option><option value="010">010 - AIEMT DE COLMAR ET DE SA REGION</option><option value="011">011 - AIEMT DE GUEBWILLER</option><option value="012">012 - STSA REGION MULHOUSE</option><option value="013">013 - MSA D ALSACE</option><option value="014">014 - SRSTT - MIDI PYR. /CH.VIOLETTE(L UNION)</option><option value="015">015 - CENTRE DE GESTION DE LA HAUTE-SOANE</option><option value="022">022 - SISTB BERGERAC</option><option value="023">023 - SIMT PERIGUEUX</option><option value="024">024 - AHI 33 SERVICE DE SANTE AU TRAVAIL</option><option value="025">025 - ASS. INDUSTR. BALLASTIERE</option><option value="026">026 - SERVICE INTERENTREPRISES SANTE TRAVAIL LIBOURNE</option><option value="027">027 - SERVICE SANTE TRAVAIL INTERENTREPRISES</option><option value="028">028 - SSTL MONT-DE-MARSAN</option><option value="029">029 - SSTL DAX</option><option value="030">030 - CIST VILLENEUVE SUR LOT</option><option value="031">031 - MT ARRONDISSEMENT AGEN</option><option value="032">032 - ASS. HYGIENE INDUST. OLORON</option><option value="033">033 - PRISSM - PAU (PREVENTION RISQUE SURVEILLANCE MEDICALE)</option><option value="034">034 - ASS. MEDECINE TRAVAIL ORTHEZ</option><option value="035">035 - ASTPB</option><option value="036">036 - SIMETRA</option><option value="037">037 - CENTRE DE GESTION 64</option><option value="041">041 - CMT VICHY</option><option value="042">042 - SERVICES INTERENTREPRISES DE SANTE AU TRAVAIL DE MOULINS</option><option value="043">043 - CMT MONTLUCON</option><option value="044">044 - ACISMT</option><option value="045">045 - AIST LE PUY - YSSINGEAUX</option><option value="046">046 - AIST BRIOUDE LANGEAC SAUGUES</option><option value="047">047 - AIST DU PUY DE DOME</option><option value="060">060 - MEDECINE COLLECTIVITES LOCALE</option><option value="061">061 - SST - BTP ET INDUSTRIES CONNEXES DE COTE D OR</option><option value="062">062 - AIST 21</option><option value="063">063 - COMITE DE MEDECINE DU TRAVAIL DU CHATILLONNAIS</option><option value="064">064 - MT DE LA NIEVRE</option><option value="066">066 - SST BTP 71</option><option value="067">067 - SIMT CHALON</option><option value="068">068 - SMTI DE LA REGION DE SENS</option><option value="069">069 - AIST 89</option><option value="070">070 - SMTI DU JOVINIEN</option><option value="071">071 - SMTI DU TONNERROIS</option><option value="081">081 - AIDAMT</option><option value="082">082 - SIST</option><option value="083">083 - M.T.I. BREST INTERPROFESSIONNEL</option><option value="084">084 - SANTE AU TRAVAIL EN IROISE</option><option value="085">085 - SANTE PREVENTION BTP 29</option><option value="086">086 - SANTE AU TRAVAIL EN CORNOUAILLE</option><option value="087">087 - S.M.I.R. MORLAIX / MORLAIX BTP</option><option value="088">088 - AST 35</option><option value="089">089 - STPF SANTE AU TRAVAIL DU PAYS DE FOUGERES</option><option value="090">090 - STSM SANTE AU TRAVAIL DU PAYS DE ST MALO</option><option value="091">091 - S.M.E.B.T.P.C.</option><option value="092">092 - AMIEM</option><option value="093">093 - CDG FONCTION PUBLIQUE TERRITORIALE DU MORBIHAN</option><option value="101">101 - MEDECINE DU TRAVAIL</option><option value="102">102 - SISTEL</option><option value="103">103 - ASS. INTERPROFESSIONNELLE SERVICE MEDICAL DU TRAVAIL</option><option value="104">104 - ASS. POUR LES ENTREPRISES B.T.P POUR LA MEDECINE DU TRAVAIL</option><option value="105">105 - A.I.M.T. (ASSOC. INTERPRO. POUR LA MEDECINE DU TRAVAIL)</option><option value="106">106 - SAN.T.BTP.</option><option value="108">108 - SANTE INTERENTREPRISES DE PREVENTION ET DE SANTE AU TRAVAIL</option><option value="109">109 - APSMT-BLOIS</option><option value="110">110 - CIHL SARAN</option><option value="111">111 - CENTRE DE GESTION FTP INDRE ET LOIRE</option><option value="121">121 - ARDENNES SANTE TRAVAIL</option><option value="123">123 - AMITR</option><option value="124">124 - GIST DU BARROIS</option><option value="125">125 - GISMA</option><option value="126">126 - AMTER</option><option value="127">127 - CIEMT</option><option value="128">128 - GASBTP</option><option value="129">129 - GIMTA</option><option value="130">130 - SMIRC</option><option value="131">131 - SMIRR</option><option value="132">132 - ASS. INTERENTREPRISES DES SERVICES MEDICAUX DE LA HAUTE-MARNE</option><option value="141">141 - MT CORSE DU SUD</option><option value="142">142 - MT HAUTE CORSE</option><option value="151">151 - MEDECINE DU TRAVAIL</option><option value="153">153 - AIMS DU HAUT DOUBS</option><option value="154">154 - MEDECINE DU TRAVAIL DU BTP DE FRANCHE-COMTE</option><option value="155">155 - ASSOCIATION MEDICALE DU TRAVAIL</option><option value="158">158 - CENTRE DEPARTEMENTAL DE GESTION DE LA FONCTION PUBLIQUE</option><option value="159">159 - SERVICE SANTE TRAVAIL NORD FRANCHE COMTE – SSTNFC</option><option value="161">161 - ASP</option><option value="163">163 - ACMS</option><option value="167">167 - AMI</option><option value="168">168 - AMPI</option><option value="169">169 - APST BTP RP</option><option value="171">171 - SIMT SERVICE INTERPROFESSIONNEL DE MEDECINE DU TRAVAIL</option><option value="175">175 - CIAMT</option><option value="176">176 - SIST CENTRE MEDICAL DE LA BOURSE</option><option value="177">177 - CENTRE MEDICAL PUBLICITE ET COMMUNICATION</option><option value="178">178 - SANTE AU TRAVAIL EN ILE DE FRANCE</option><option value="179">179 - EFFICIENCE - ANCIENNT CMTIE</option><option value="181">181 - CMIE</option><option value="182">182 - SISTBP</option><option value="183">183 - CMSM</option><option value="189">189 - SEMSI CODE</option><option value="190">190 - SIFSAT</option><option value="191">191 - SMST CODE</option><option value="192">192 - SERSIMT CODE</option><option value="195">195 - AMETIF CODE</option><option value="197">197 - AISP METRA</option><option value="199">199 - SIST</option><option value="201">201 - AIRST</option><option value="203">203 - OBJECTIF SANTE TRAVAIL</option><option value="204">204 - SMIROP</option><option value="207">207 - AMEDICLEN</option><option value="208">208 - HORIZON SANTE TRAVAIL</option><option value="209">209 - IPAL</option><option value="211">211 - SMIE BOIS COLOMBES</option><option value="212">212 - SEST</option><option value="215">215 - AMET</option><option value="216">216 - AICAC</option><option value="218">218 - SIMT</option><option value="220">220 - A.C.I.S.T</option><option value="221">221 - GIM</option><option value="222">222 - GIMAC</option><option value="224">224 - ASTE</option><option value="230">230 - SIST BTP 77</option><option value="261">261 - S.I.S.T SERVICE INTERENTREPRISE DE SANTE AU TRAVAIL DE NARBONNE</option><option value="262">262 - SCE INTERPROFESSIONNEL DE SANTE AU TRAVAIL</option><option value="263">263 - A.C.M.T. (CANTON DE GANGES)</option><option value="264">264 - A.I.S.M.T. BEAUCAIRE</option><option value="265">265 - A.I.S.M.T. NIMES</option><option value="266">266 - A.M.T. CENTRE MARCOULE</option><option value="267">267 - CMI ALES MENDE</option><option value="268">268 - AMETRA</option><option value="269">269 - MT BATIMENT ET TP</option><option value="270">270 - A.I.S.T.</option><option value="271">271 - A.I.P.A.L.S.</option><option value="274">274 - THAU SALAGOU SANTE TRAVAIL (T2ST)</option><option value="275">275 - A.S.T.I.M MARVEJOLS</option><option value="276">276 - PST 66</option><option value="277">277 - MEDECINE BANCAIRE</option><option value="302">302 - AIST 19 - ASSOCIATION INTERENTREPRISES</option><option value="303">303 - ACIMT</option><option value="304">304 - AMCO</option><option value="305">305 - SERVICE MEDICAL INTER-ENTR. DES ORG. DE SECURITE SOCIALE DU R.G.</option><option value="306">306 - AIST 87</option><option value="311">311 - SIST DES B.T.P. ET DES ACTIVITES CONNEXES DE LORRAINE</option><option value="312">312 - SERVICE MEDICAL INTERPROFESSIONNEL MEUSIEN</option><option value="313">313 - MEDECINE DU TRAVAIL METZ</option><option value="316">316 - MEDECINE DU TRAVAIL THIONVILLE</option><option value="317">317 - SERV. INTERENTREPRISES DE SANTE AU TRAVAIL REGION ROSSELLE-NIED</option><option value="319">319 - SERVICE DE SANTE AU TRAVAIL SAINT DIE</option><option value="320">320 - SERVICE DE SANTE AU TRAVAIL EPINAL</option><option value="321">321 - SERVICE DE SANTE AU TRAVAIL NEUFCHATEAU</option><option value="322">322 - SERVICE DE SANTE AU TRAVAIL REMIREMONT</option><option value="323">323 - ASS LORRAINE DES SERV MEDICAUX DU TRAVAIL</option><option value="331">331 - ASTA09 / ASSOCIATION SANTE AU TRAVAIL DE L ARIEGE</option><option value="332">332 - MEDECINE DU TRAVAIL VILLEFRANCHE RGUE</option><option value="333">333 - SIMCA MILLAU</option><option value="334">334 - MEDECINE DU TRAVAIL RODEZ</option><option value="335">335 - SMISA</option><option value="336">336 - SST ARTISANAT-CMTA/ETOILE (TLSE)</option><option value="338">338 - SST (ST-GAUDENS)</option><option value="340">340 - ASTIA/ASS DE MEDECINE ET DE SANTE AU TRAVAIL (TLSE)</option><option value="341">341 - SAMSI / PLACE JOURDAIN (TLSE)</option><option value="343">343 - SERVICE ST (MURET)</option><option value="344">344 - SERVICE ST (REVEL)</option><option value="346">346 - SRAS BPTP/RECOLLETS(TLSE)</option><option value="347">347 - CSTG (AUCH)</option><option value="348">348 - MEDECINE DU TRAVAIL 46</option><option value="349">349 - ASMT DES HAUTES-PYRENEES</option><option value="352">352 - SISTTS SECTEUR MAZAMET</option><option value="353">353 - SERVICE PARITAIRE DE SANTE AU TRAVAIL DU TARN</option><option value="354">354 - SANTE AU TRAVAIL ALBI</option><option value="356">356 - SISTTS REGION CASTRES</option><option value="357">357 - SMTI 82 MONTAUBAN</option><option value="363">363 - ASTAV</option><option value="364">364 - STSA - SANTE TRAVAIL SAMBRE AVESNOIS</option><option value="366">366 - AIMST DE CAMBRAI</option><option value="367">367 - SERVICE DE SANTE INTER BANQUES</option><option value="369">369 - CEDEST DUNKERQUE</option><option value="372">372 - POLE SANTE TRAVAIL METROPOLE NORD</option><option value="373">373 - STSA - SANTE TRAVAIL SAMBRE AVESNOIS</option><option value="375">375 - (SIMUP) HALLUIN</option><option value="378">378 - AST 62-59</option><option value="379">379 - AST 62-59 - CENTRE MEDICAL DE LENS</option><option value="380">380 - AST 62-59 - CENTRE MEDICAL D HENIN- BEAUMONT</option><option value="382">382 - AST 62-59 - CENTRE MEDICAL D ARRAS</option><option value="383">383 - ASTIL - ASS. SANTE AU TRAVAIL INTERENTREPRISES DU LITTORAL 62</option><option value="384">384 - SANTRAVIR</option><option value="385">385 - GISTAF</option><option value="386">386 - SISTM CHERBOURG</option><option value="387">387 - SISTM SAINT-LO</option><option value="388">388 - SMTBTP CHERBOURG</option><option value="389">389 - SISTM COUTANCES</option><option value="390">390 - AMTH BEAUMONT</option><option value="391">391 - MIT VILLE CHERBOURG OCTEVILLE</option><option value="392">392- ASTISMIE - ASS SANTE AU TRAVAIL</option><option value="393">393 - ASSOCIATION SANTE AU TRAVAIL</option><option value="400">400 - SIST BTP 61</option><option value="401">401 - CIST61</option><option value="402">402 - ASTIF</option><option value="403">403 - PST</option><option value="404">404 - CMAIC</option><option value="405">405 - SIST</option><option value="412">412 - AMIVA ASS INTERPROFESSIONNELLE DE LA VALLE DE L ANDELLE</option><option value="413">413 - AMSIE DE BERNAY BRIONNE ET PONT- AUDEMER</option><option value="414">414 - ASS AMI SANTE AU TRAVAIL</option><option value="415">415 - AMSIE REGION DE GISORS</option><option value="416">416 - AMSIE VERNEUIL SUR AVRE</option><option value="417">417 - AMSIE VERNON ET REGION</option><option value="418">418 - SANTE AU TRAVAIL BTP EURE</option><option value="419">419 - GIMETRA GROUPEMENT INTERPROFESSIONNEL DE MEDECINE DU TRAVAIL</option><option value="421">421 - MEDECINE DU TRAVAIL BOLBEC AIHIMT</option><option value="422">422 - AMSN</option><option value="423">423 - MEDECINE DU TRAVAIL DE DIEPPE</option><option value="425">425 - MEDECINE DU TRAVAIL DU HAVRE AIST</option><option value="426">426 - MEDECINE DU TRAVAIL DU HAVRE CMHI</option><option value="427">427 - YVETOT ( POUR AMSN )</option><option value="428">428 - BATIMENT ET TRAVAUX PUBLICS</option><option value="429">429 - SERVICE MEDICAL DU TRAVAIL (COMMERCE ET PME)</option><option value="430">430 - MEDECINE DU TRAVAIL BATIMENT BTP</option><option value="431">431 - ADESTI</option><option value="432">432 - MEDECINE DU TRAVAIL FECAMP ISTF</option><option value="433">433 - MEDECINE DU TRAVAIL PORTUAIRE</option><option value="440">440 - UNION DES USAGERS DU PORT DE ROUEN</option>
<option value="441">441 - SERVICE SANTE TRAVAIL REGION NANTAISE SSTRN</option>
<option value="442">442 - AMEBAT</option>
<option value="444">444 - GROUP INTERPROF SANTE AU TRAVAIL GIST</option>
<option value="445">445 - MTPL</option>
<option value="446">446 - SMIE SERVICE MEDICAL INTER ENTREPRISES</option>
<option value="447">447 - SMIA DE L ANJOU</option>
<option value="448">448 - STCS CHOLET - SAUMUR</option>
<option value="449">449 - SMI DU SAUMUROIS</option>
<option value="451">451 - S.A.T.M.</option>
<option value="452">452 - SERVICE SARTHOIS DE MEDECINE DU TRAVAIL</option>
<option value="453">453 - RESTEV</option>
<option value="454">454 - AHMT - FONTENAY LE COMTE</option>
<option value="456">456 - AHMT - CHALLANS</option>
<option value="457">457 - S M T - SABLES D OLONNE</option>
<option value="471">471 - MEDECINE DU TRAVAIL SOISSONS</option>
<option value="472">472 - MEDECINE TRAVAIL ST QUENTIN</option>
<option value="473">473 - SMIN</option>
<option value="474">474 - MTVO COMPIEGNE</option>
<option value="475">475 - M.E.D.I.S.I.S BEAUVAIS</option>
<option value="476">476 - S.M.I.B.T.P.</option>
<option value="477">477 - UMTV</option>
<option value="478">478 - AISTV</option>
<option value="479">479 - AMSIH</option>
<option value="480">480 - ASMIS</option>
<option value="491">491 - SISTA ANGOULEME</option>
<option value="492">492 - SISTAC COGNAC</option>
<option value="493">493 - A.S.T.S ASSOCIATION SANTE AU TRAVAIL DE SAINTONGE - JONZAC-</option>
<option value="494">494 - MEDECINE DU TRAVAIL A.P.A.S.</option>
<option value="495">495 - SANTE AU TRAVAIL D AUNIS</option>
<option value="496">496 - A.S.T.S ASSOCIATION SANTE AU TRAVAIL DE SAINTONGE - SAINTES -</option>
<option value="497">497 - SIMT DEUX-SEVRES</option>
<option value="498">498 - ASSOC SERV. MEDICAUX DU TRAVAIL DE LA VIENNE</option>
<option value="499">499 - MEDECINE DU TRAVAIL MSA LANGUEDOC</option>
<option value="501">501 - ASSO INTERPROF SANTE MEDECINE TRAVAIL ALPES HAUTE-PROVENCE AISMT</option>
<option value="502">502 - GEST 05</option>
<option value="503">503 - AMETRA 06</option>
<option value="504">504 - APST BTP 06</option>
<option value="506">506 - CMTI 06</option>
<option value="507">507 - AISMT 13. 0491812029</option>
<option value="514">514 - ASTBTP13 0491230330</option>
<option value="515">515 - GIMS</option>
<option value="516">516 - SANTE AU TRAVAIL PROVENCE 0442162499</option>
<option value="517">517 - EXPERTIS 04 91 99 05 10</option>
<option value="519">519 - AIST 83</option>
<option value="524">524 - AIST 84</option>
<option value="525">525 - SANTE AU TRAVAIL DURANCE LUBERON 0490066160</option>
<option value="526">526 - GMSI 84</option>
<option value="527">527 - TRANSPORTEURS ROUTIERS DU VAR</option>
<option value="531">531 - MT PERONNAS &amp; AUTRES</option>
<option value="532">532 - COMITE MEDECINE DU TRAVAIL</option>
<option value="533">533 - CMT BATIMENT</option>
<option value="535">535 - ASS AUBENAS ET SA REGION</option>
<option value="536">536 - ASS PRIVAS ET SA REGION</option>
<option value="537">537 - ASS MEDECINE DU TRAVAIL REGION TAIN-TOURNON</option>
<option value="538">538 - COMITE SM HAUT VIVARAIS</option>
<option value="540">540 - AIP ASS VALENCE ET REGION</option>
<option value="541">541 - REGION DE NYONS</option>
<option value="542">542 - ROMANS ET SA REGION</option>
<option value="543">543 - SITE NUCLEAIRE</option>
<option value="544">544 - REGION DE SAINT VALLIER</option>
<option value="545">545 - VALLEE DE LA DROME</option>
<option value="546">546 - SIST26/07</option>
<option value="547">547 - SMT ALPES SANTE TRAVAIL TRAVAIL TEMPORAIRE</option>
<option value="549">549 - SMT DE BOURGOIN JALLIEU</option>
<option value="550">550 - SMT ALPES SANTE TRA VAIL</option>
<option value="551">551 - ASSOC DE MT INTERBANCAIRES</option>
<option value="552">552 - MT BATIMENT ET TX PUBLICS DE L ISERE</option>
<option value="553">553 - SMT METRAZIF</option>
<option value="554">554 - MT2I</option>
<option value="555">555 - SERVICE MEDICAL INTERENTREPRISES</option>
<option value="556">556 - SM INTERENTREPRISE</option>
<option value="557">557 - SERVICE MEDICAL DU TRAVAIL DE BOEN</option>
<option value="558">558 - SERVICE MEDICAL DE ST-CHAMOND</option>
<option value="559">559 - SERVICE MEDICAL DE CHARLIEU</option>
<option value="560">560 - SERVICE MEDICAL DU TRAVAIL DU B.T.P.</option>
<option value="561">561 - SERVICE MEDICAL DU TRAVAIL SUD LOIRE ( ST-ETIENNE )</option>
<option value="562">562 - SERVICE MEDICAL DE ROANNE</option>
<option value="564">564 - SERVICE MEDICAL DU TRAVAIL SUD LOIRE (GIER)</option>
<option value="570">570 - AGEMETRA</option>
<option value="571">571 - MEDECINE DU TRAVAIL DE COURS</option>
<option value="572">572 - BTP SANTE AU TRAVAIL</option>
<option value="573">573 - MEDECINE DU TRAVAIL DE L OUEST LYONNAIS</option>
<option value="574">574 - A S T GRAND LYON</option>
<option value="575">575 - MED. DU TRAVAIL DE THIZY</option>
<option value="576">576 - MED. DU TRAVAIL DE VILLEFRANCHE</option>
<option value="577">577 - MED. DU TRAVAIL RHONE POULENC AGRO</option>
<option value="578">578 - CENTRE MEDECINE TRAVAIL DE SAVOIE</option>
<option value="580">580 - MEDECINE DU TRAVAIL DU BATIMENT</option>
<option value="582">582 - ASMI SALLANCHES</option>
<option value="583">583 - ASMI SCIONZIER</option>
<option value="585">585 - ASS SANTE AU TRAVAIL DU GENEVOIS</option>
<option value="586">586 - AST74</option>
<option value="587">587 - ASMI BONNEVILLE</option>
<option value="600">600 - CENTRE INTER-ENTREPRISE DE MEDECINE DU TRAVAIL (CIMT)</option>
<option value="601">601 - MEDECINE DU TRAVAIL DE LA GUADELOUPE ( MTG BTP )</option>
<option value="602">602 - ASS.INTERPR.MEDECINE DU TRAVAIL</option>
<option value="603">603 - CTRE DE MEDECINE DU TRAVAIL</option>
<option value="604">604 - CISTC</option>
<option value="605">605 - STKOG</option>
<option value="606">606 - INTERMETRA METRAG</option>
<option value="607">607 - SISTBI</option>
<option value="608">608 - 2MT MARTINIQUE MEDECINE TRAVAIL</option>
<option value="827">827 - CISTTAA</option>
<option value="833">833 - SST BORDEAUX</option>
<option value="864">864 - SIMETRA ET ASTPB</option>
<option value="Code SST">Libellé Service de Santé au Travail</option>
              </select>
            </div>
        </div>
        <div class="modal-footer d-flex justify-content-between">
          <button class="btn btn-outline-secondary btn-prev" disabled>
            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
          </button>
        </div>
      </div>
      <div id="personal-info-vertical" class="content">
        <div class="content-header">
          <h5 class="mb-0">Location Info</h5>
          <small>Add Address Info</small>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="address">Address</label>
            <input id="address" type="text" class="form-control" value="A-65, Belvedere Streets" name="address" placeholder="Address"/>
          </div>
        </div>
        <div class="row">
        <div class="form-group col-md-4">
        <label for="postcode">Postcode</label>
        <input id="postcode" type="text" class="form-control" value="75000" name="postcode" placeholder="75000"/>
            </div>
            <div class="form-group col-md-4">
            <label for="city">City</label>
            <input id="city" type="text" class="form-control" name="city" value="London" placeholder="City"/>
            </div>
            <div class="form-group col-md-4">
            <label for="city">Country</label>
            <input id="country" type="text" class="form-control" name="country" value="United States" placeholder="Country"/>
            </div>
        </div>
        <div class="modal-footer d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
          </button>
        </div>
      </div>
      <div id="wage-step-vertical" class="content">
        <div class="content-header">
          <h5 class="mb-0">Convention collective</h5>
          <small>Convention collective</small>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
          </div>
      </div>
        <div class="modal-footer d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
          </button>
        </div>
      </div>
      <div id="salary-links-vertical" class="content">
        <div class="content-header">
          <h5 class="mb-0">Shift & Goals</h5>
          <small>Shift & Productivity</small>
        </div>
        <div class="row">
            <div class="col-md-6" style="float:none;margin:auto;">
              <label for="productivity">Objectif de productivité</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                     <span class="input-group-text">€</span>
                    </div>
                  <input type="text" class="form-control" placeholder="50" id="productivity" value="50" name="productivity" aria-label="Amount (to the nearest euro)" />
                    <div class="input-group-append">
                     <span class="input-group-text">Per hour</span>
                    </div>
                </div>
            </div>
            </div>
            <div class="divider divider-secondary">
            <div class="divider-text"><i data-feather="clock"></i></div>
          </div>
        <div class="row">
        <div class="form-group col-md-12">
        <form action="#" class="invoice-repeater">
            <div data-repeater-list="invoice">
              <div data-repeater-item>
                <div class="row d-flex align-items-end">
                  <div class="col-md-4 col-12">
                    <div class="form-group">
                      <label for="shiftname">Shift Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="shiftname"
                        name='shiftname'
                        aria-describedby="shiftname"
                        placeholder="Shift name"
                      />
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                    <label for="fp-time-start">Time start</label>
                     <input type="text" id="time_start" name="time_start" class="form-control flatpickr-time text-left" placeholder="HH:MM" />
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                    <label for="fp-time-end">Time end</label>
                    <input type="text" id="time_end" name="time_end" class="form-control flatpickr-time text-left" placeholder="HH:MM" />
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">
                        <i data-feather='trash-2'></i>
                      </button>
                    </div>
                  </div>
                </div>
                <hr />
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <button class="btn btn-icon btn-secondary" type="button" data-repeater-create>
                  <i data-feather="plus" class="mr-25"></i>
                  <span>Add New Shift</span>
                </button>
              </div>
            </div>
          </form>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button type="button" class="btn btn-success" id="type-success">Submit</button>
        </div>
      </div>
</section>
<!-- Modal Sizes end -->
<!-- Vertical Wizard -->

<!-- /Vertical Wizard -->
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/forms/wizard/bs-stepper.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/sweetalert2.all.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/polyfill.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.time.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/repeater/jquery.repeater.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.time.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/legacy.js')) }}"></script>

@endsection

@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/forms/form-wizard.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/components/components-modals.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/extensions/ext-component-sweet-alerts.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/forms/form-number-input.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/pages/app-user-edit.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/components/components-navs.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/forms/form-repeater.js')) }}"></script>

@endsection