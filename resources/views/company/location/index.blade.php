@extends('layouts/contentLayoutMaster')

@section('title', 'Locations')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/wizard/bs-stepper.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-wizard.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-pickadate.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
@endsection

@section('content')
<!-- Horizontal Wizard -->
<section class="horizontal-wizard">
  <div class="bs-stepper horizontal-wizard-example">
    <div class="bs-stepper-header">
      <div class="step" data-target="#location-details">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">1</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Location Details</span>
            <span class="bs-stepper-subtitle">Setup Location Details</span>
          </span>
        </button>
      </div>
      <div class="line">
        <i data-feather="chevron-right" class="font-medium-2"></i>
      </div>
      <div class="step" data-target="#location-info">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">2</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Location Info</span>
            <span class="bs-stepper-subtitle">Add Address Info</span>
          </span>
        </button>
      </div>
      <div class="line">
        <i data-feather="chevron-right" class="font-medium-2"></i>
      </div>
      <div class="step" data-target="#convention">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">3</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Convention collective</span>
            <span class="bs-stepper-subtitle">Horaires</span>
          </span>
        </button>
      </div>
      <div class="line">
        <i data-feather="chevron-right" class="font-medium-2"></i>
      </div>
      <div class="step" data-target="#shift">
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
      <div id="location-details" class="content">
        <div class="content-header">
          <h5 class="mb-0">Location Details</h5>
          <small class="text-muted">Enter Your Location Details</small>
        </div>
        <form>
        <span id="errorMessage" class="accounterrormessage"></span>
          <div class="row">
            <div class="form-group col-md-6">
            <label for="name">Company Name</label>
            <input type="text" id="companies_id"  required name="companies_id"  class="form-control" placeholder="Company Name"/>
            </div>
            <input type="hidden" name="location_id" id="location_id" value="0">
            <div class="form-group col-md-6">
            <label for="immatriculation">Immatriculation</label>
            <input type="text" id="immatriculation" name="Immatriculation"  class="form-control" placeholder="Immatriculation"/>
            </div>
          </div>
          <div class="row">
          <div class="form-group col-md-12">
          <label>Occupational Medicine</label>
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
        </form>
        <div class="d-flex justify-content-between">
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
      <div id="location-info" class="content">
        <div class="content-header">
          <h5 class="mb-0">Location Info</h5>
          <small>Enter Your Location Info.</small>
        </div>

        <form>
        <span id="errorMessage" class="personalerrormessage"></span>
        <div class="row">
          <div class="form-group col-md-8">
            <label for="address">Address</label>
            <input id="address" type="text" class="form-control" name="address" placeholder="Address"/>
          </div>
          <div class="form-group col-md-4">
        <label for="postcode">Postcode</label>
        <input id="postcode" type="text" class="form-control" name="postcode" placeholder="75000"/>
        </div>
        <div class="form-group col-md-6">
            <label for="city">City</label>
            <input id="city" type="text" class="form-control" name="city" placeholder="City"/>
            </div>
            <div class="form-group col-md-6">
            <label for="coutry">Country</label>
              <select class="select2 form-control form-control-lg" id="country">
                  <option value="  " selected>Select a country</option>
                  <option value="--">Not Specified</option>
                  <option value="AF">Afghanistan</option>
                  <option value="AL">Albania</option>
                  <option value="DZ">Algeria</option>
                  <option value="AS">American Samoa</option>
                  <option value="AD">Andorra</option>
                  <option value="AO">Angola</option>
                  <option value="AI">Anguilla</option>
                  <option value="AQ">Antarctica</option>
                  <option value="AG">Antigua and Barbuda</option>
                  <option value="AR">Argentina</option>
                  <option value="AM">Armenia</option>
                  <option value="AW">Aruba</option>
                  <option value="AU">Australia</option>
                  <option value="AT">Austria</option>
                  <option value="AZ">Azerbaijan</option>
                  <option value="BS">Bahamas</option>
                  <option value="BH">Bahrain</option>
                  <option value="BD">Bangladesh</option>
                  <option value="BB">Barbados</option>
                  <option value="BY">Belarus</option>
                  <option value="BE">Belgium</option>
                  <option value="BZ">Belize</option>
                  <option value="BJ">Benin</option>
                  <option value="BM">Bermuda</option>
                  <option value="BT">Bhutan</option>
                  <option value="BO">Bolivia</option>
                  <option value="BA">Bosnia and Herzegowina</option>
                  <option value="BW">Botswana</option>
                  <option value="BV">Bouvet Island</option>
                  <option value="BR">Brazil</option>
                  <option value="IO">British Indian Ocean Territory</option>
                  <option value="BN">Brunei Darussalam</option>
                  <option value="BG">Bulgaria</option>
                  <option value="BF">Burkina Faso</option>
                  <option value="BI">Burundi</option>
                  <option value="KH">Cambodia</option>
                  <option value="CM">Cameroon</option>
                  <option value="CA">Canada</option>
                  <option value="CV">Cape Verde</option>
                  <option value="KY">Cayman Islands</option>
                  <option value="CF">Central African Republic</option>
                  <option value="TD">Chad</option>
                  <option value="CL">Chile</option>
                  <option value="CN">China</option>
                  <option value="CX">Christmas Island</option>
                  <option value="CC">Cocos (Keeling) Islands</option>
                  <option value="CO">Colombia</option>
                  <option value="KM">Comoros</option>
                  <option value="CG">Congo</option>
                  <option value="CD">Congo, the Democratic Republic of the</option>
                  <option value="CK">Cook Islands</option>
                  <option value="CR">Costa Rica</option>
                  <option value="CI">Cote d'Ivoire</option>
                  <option value="HR">Croatia (Hrvatska)</option>
                  <option value="CU">Cuba</option>
                  <option value="CY">Cyprus</option>
                  <option value="CZ">Czech Republic</option>
                  <option value="DK">Denmark</option>
                  <option value="DJ">Djibouti</option>
                  <option value="DM">Dominica</option>
                  <option value="DO">Dominican Republic</option>
                  <option value="TP">East Timor</option>
                  <option value="EC">Ecuador</option>
                  <option value="EG">Egypt</option>
                  <option value="SV">El Salvador</option>
                  <option value="GQ">Equatorial Guinea</option>
                  <option value="ER">Eritrea</option>
                  <option value="EE">Estonia</option>
                  <option value="ET">Ethiopia</option>
                  <option value="FK">Falkland Islands (Malvinas)</option>
                  <option value="FO">Faroe Islands</option>
                  <option value="FJ">Fiji</option>
                  <option value="FI">Finland</option>
                  <option value="FR">France</option>
                  <option value="FX">France, Metropolitan</option>
                  <option value="GF">French Guiana</option>
                  <option value="PF">French Polynesia</option>
                  <option value="TF">French Southern Territories</option>
                  <option value="GA">Gabon</option>
                  <option value="GM">Gambia</option>
                  <option value="GE">Georgia</option>
                  <option value="DE">Germany</option>
                  <option value="GH">Ghana</option>
                  <option value="GI">Gibraltar</option>
                  <option value="GR">Greece</option>
                  <option value="GL">Greenland</option>
                  <option value="GD">Grenada</option>
                  <option value="GP">Guadeloupe</option>
                  <option value="GU">Guam</option>
                  <option value="GT">Guatemala</option>
                  <option value="GN">Guinea</option>
                  <option value="GW">Guinea-Bissau</option>
                  <option value="GY">Guyana</option>
                  <option value="HT">Haiti</option>
                  <option value="HM">Heard and Mc Donald Islands</option>
                  <option value="VA">Holy See (Vatican City State)</option>
                  <option value="HN">Honduras</option>
                  <option value="HK">Hong Kong</option>
                  <option value="HU">Hungary</option>
                  <option value="IS">Iceland</option>
                  <option value="IN">India</option>
                  <option value="ID">Indonesia</option>
                  <option value="IR">Iran (Islamic Republic of)</option>
                  <option value="IQ">Iraq</option>
                  <option value="IE">Ireland</option>
                  <option value="IL">Israel</option>
                  <option value="IT">Italy</option>
                  <option value="JM">Jamaica</option>
                  <option value="JP">Japan</option>
                  <option value="JO">Jordan</option>
                  <option value="KZ">Kazakhstan</option>
                  <option value="KE">Kenya</option>
                  <option value="KI">Kiribati</option>
                  <option value="KP">Korea, Democratic People's Republic of</option>
                  <option value="KR">Korea, Republic of</option>
                  <option value="KW">Kuwait</option>
                  <option value="KG">Kyrgyzstan</option>
                  <option value="LA">Lao People's Democratic Republic</option>
                  <option value="LV">Latvia</option>
                  <option value="LB">Lebanon</option>
                  <option value="LS">Lesotho</option>
                  <option value="LR">Liberia</option>
                  <option value="LY">Libyan Arab Jamahiriya</option>
                  <option value="LI">Liechtenstein</option>
                  <option value="LT">Lithuania</option>
                  <option value="LU">Luxembourg</option>
                  <option value="MO">Macau</option>
                  <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                  <option value="MG">Madagascar</option>
                  <option value="MW">Malawi</option>
                  <option value="MY">Malaysia</option>
                  <option value="MV">Maldives</option>
                  <option value="ML">Mali</option>
                  <option value="MT">Malta</option>
                  <option value="MH">Marshall Islands</option>
                  <option value="MQ">Martinique</option>
                  <option value="MR">Mauritania</option>
                  <option value="MU">Mauritius</option>
                  <option value="YT">Mayotte</option>
                  <option value="MX">Mexico</option>
                  <option value="FM">Micronesia, Federated States of</option>
                  <option value="MD">Moldova, Republic of</option>
                  <option value="MC">Monaco</option>
                  <option value="MN">Mongolia</option>
                  <option value="MS">Montserrat</option>
                  <option value="MA">Morocco</option>
                  <option value="MZ">Mozambique</option>
                  <option value="MM">Myanmar</option>
                  <option value="NA">Namibia</option>
                  <option value="NR">Nauru</option>
                  <option value="NP">Nepal</option>
                  <option value="NL">Netherlands</option>
                  <option value="AN">Netherlands Antilles</option>
                  <option value="NC">New Caledonia</option>
                  <option value="NZ">New Zealand</option>
                  <option value="NI">Nicaragua</option>
                  <option value="NE">Niger</option>
                  <option value="NG">Nigeria</option>
                  <option value="NU">Niue</option>
                  <option value="NF">Norfolk Island</option>
                  <option value="MP">Northern Mariana Islands</option>
                  <option value="NO">Norway</option>
                  <option value="OM">Oman</option>
                  <option value="PK">Pakistan</option>
                  <option value="PW">Palau</option>
                  <option value="PA">Panama</option>
                  <option value="PG">Papua New Guinea</option>
                  <option value="PY">Paraguay</option>
                  <option value="PE">Peru</option>
                  <option value="PH">Philippines</option>
                  <option value="PN">Pitcairn</option>
                  <option value="PL">Poland</option>
                  <option value="PT">Portugal</option>
                  <option value="PR">Puerto Rico</option>
                  <option value="QA">Qatar</option>
                  <option value="RE">Reunion</option>
                  <option value="RO">Romania</option>
                  <option value="RU">Russian Federation</option>
                  <option value="RW">Rwanda</option>
                  <option value="KN">Saint Kitts and Nevis</option>
                  <option value="LC">Saint LUCIA</option>
                  <option value="VC">Saint Vincent and the Grenadines</option>
                  <option value="WS">Samoa</option>
                  <option value="SM">San Marino</option>
                  <option value="ST">Sao Tome and Principe</option>
                  <option value="SA">Saudi Arabia</option>
                  <option value="SN">Senegal</option>
                  <option value="SC">Seychelles</option>
                  <option value="SL">Sierra Leone</option>
                  <option value="SG">Singapore</option>
                  <option value="SK">Slovakia (Slovak Republic)</option>
                  <option value="SI">Slovenia</option>
                  <option value="SB">Solomon Islands</option>
                  <option value="SO">Somalia</option>
                  <option value="ZA">South Africa</option>
                  <option value="GS">South Georgia and the South Sandwich Islands</option>
                  <option value="ES">Spain</option>
                  <option value="LK">Sri Lanka</option>
                  <option value="SH">St. Helena</option>
                  <option value="PM">St. Pierre and Miquelon</option>
                  <option value="SD">Sudan</option>
                  <option value="SR">Suriname</option>
                  <option value="SJ">Svalbard and Jan Mayen Islands</option>
                  <option value="SZ">Swaziland</option>
                  <option value="SE">Sweden</option>
                  <option value="CH">Switzerland</option>
                  <option value="SY">Syrian Arab Republic</option>
                  <option value="TW">Taiwan, Province of China</option>
                  <option value="TJ">Tajikistan</option>
                  <option value="TZ">Tanzania, United Republic of</option>
                  <option value="TH">Thailand</option>
                  <option value="TG">Togo</option>
                  <option value="TK">Tokelau</option>
                  <option value="TO">Tonga</option>
                  <option value="TT">Trinidad and Tobago</option>
                  <option value="TN">Tunisia</option>
                  <option value="TR">Turkey</option>
                  <option value="TM">Turkmenistan</option>
                  <option value="TC">Turks and Caicos Islands</option>
                  <option value="TV">Tuvalu</option>
                  <option value="UG">Uganda</option>
                  <option value="UA">Ukraine</option>
                  <option value="AE">United Arab Emirates</option>
                  <option value="GB">United Kingdom</option>
                  <option value="US">United States</option>
                  <option value="UM">United States Minor Outlying Islands</option>
                  <option value="UY">Uruguay</option>
                  <option value="UZ">Uzbekistan</option>
                  <option value="VU">Vanuatu</option>
                  <option value="VE">Venezuela</option>
                  <option value="VN">Viet Nam</option>
                  <option value="VG">Virgin Islands (British)</option>
                  <option value="VI">Virgin Islands (U.S.)</option>
                  <option value="WF">Wallis and Futuna Islands</option>
                  <option value="EH">Western Sahara</option>
                  <option value="YE">Yemen</option>
                  <option value="YU">Yugoslavia</option>
                  <option value="ZM">Zambia</option>
                  <option value="ZW">Zimbabwe</option>
              </select>
            </div>
          </div>
        </form>

        <div class="d-flex justify-content-between">
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

      <div id="convention" class="content">
        <div class="content-header">
          <h5 class="mb-0">Convention collective</h5>
          <small>Choose Your Convention</small>
        </div>
        <form>
        <span id="errorMessage" class="contracterrormessage"></span>

            <div class="row">

                <div class="form-group col-md-12">
                    <label for="conventionId">Votre convention collective :</label>
                    <select class="form-control select2"  id="conventionId" name="convention" onchange="getCode(this.value)">
                        <option value="" selected="selected">XXXXX</option>
                        @foreach ($conventioncollective as $Ckey => $Cvalue)
                            <option value="{{ $Cvalue->id }}">{{ $Cvalue->convention_collective }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-12">
                    <label for="code_ape">Code APE</label>
                    <select class="form-control select2"  id="code_ape" name="code_ape">
                        <option value="">XXXXX</option>
                    </select>
                </div>

                <div class="form-group col-md-12">
                    <div class="divider divider-dashed">
                        <div class="divider-text">Temps de travail</div>
                    </div>
          <!-- Navigation -->

              <div class="row">
                <div class="col">
                  <div class="card text-center mb-3">
                    <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs ml-0" id="nav-tabs" role="tablist">
                        <li class="nav-item">
                          <a
                            class="nav-link active"
                            id="rules1-tab"
                            data-toggle="tab"
                            href="#rules1"
                            role="tab"
                            aria-controls="rules1"
                            aria-selected="true"
                            >Rules 1</a
                          >
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link"
                            id="rules2-tab"
                            data-toggle="tab"
                            href="#rules2"
                            role="tab"
                            aria-controls="rules2"
                            aria-selected="false"
                            >Rules 2</a
                          >
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link"
                            id="rules3-tab"
                            data-toggle="tab"
                            href="#rules3"
                            role="tab"
                            aria-controls="rules3"
                            aria-selected="false"
                            >Rules 3</a
                          >
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link"
                            id="rules4-tab"
                            data-toggle="tab"
                            href="#rules4"
                            role="tab"
                            aria-controls="rules4"
                            aria-selected="false"
                            >Rules 4</a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link"
                            id="rules5-tab"
                            data-toggle="tab"
                            href="#rules5"
                            role="tab"
                            aria-controls="rules5"
                            aria-selected="false"
                            >Rules 5</a
                          >
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="rules1" role="tabpanel" aria-labelledby="rules1-tab">
                          <h4 class="card-title">Temps de travail quotidien maximal</h4>
                          <p class="card-text">Un employé ne peut normalement pas travailler plus de 10h dans une journée. Il existe des cas particuliers : dans le cas de la modulation du temps de travail par exemple.</p>
                          <div class="avatar bg-light-primary avatar-xl">
                          <span class="avatar-content">12h</span>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="rules2" role="tabpanel" aria-labelledby="rules2-tab">
                          <h4 class="card-title">Temps de travail maximal sans pause</h4>
                          <p class="card-text">Pensez à intégrer une pause dans les shifts longs. Mieux : créez 2 shifts avec des heures de début et de fin, par exemple 8h30-11h30 et 12h00-14h30. En cas de contrôle l’heure de pause sera ainsi clairement indiquée.</p>
                          <div class="avatar bg-light-secondary avatar-xl">
                          <span class="avatar-content">6h</span>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="rules3" role="tabpanel" aria-labelledby="rules3-tab">
                          <h4 class="card-title">Repos consécutif entre deux journées</h4>
                          <p class="card-text">Si un salarié termine son travail à 23h, il ne peut pas reprendre le lendemain avant 10h.</p>
                          <div class="avatar bg-light-success avatar-xl">
                          <span class="avatar-content">11h</span>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="rules4" role="tabpanel" aria-labelledby="rules4-tab">
                          <h4 class="card-title">Jours consécutifs de travail maximal</h4>
                          <p class="card-text">Un salarié ne peut pas travailler plus de 6 jours consécutifs.</p>
                          <div class="avatar bg-light-warning avatar-xl">
                          <span class="avatar-content">4</span>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="rules5" role="tabpanel" aria-labelledby="rules5-tab">
                          <h4 class="card-title">Temps de travail hebdomadaire maximal</h4>
                          <p class="card-text">Un salarié ne peut pas travailler plus de 48h dans la semaine.</p>
                          <div class="avatar bg-light-danger avatar-xl">
                          <span class="avatar-content">46h</span>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

<!--/ Navigation -->
            </div>
          </div>
        </form>
        <div class="d-flex justify-content-between">
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
      <div id="shift" class="content">
        <div class="content-header">
          <h5 class="mb-0">Shift</h5>
          <small>Select Your Shift</small>
        </div>
        <form>
          <span id="errorMessage" class="salaryerrormessage"></span>
          <div class="row">
            <div class="col-sm" style="float:none;margin:auto;">
              <label for="productivity">Objectif de productivité</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="50" id="productivity" name="productivity" aria-label="Amount (to the nearest euro)" />
                    <div class="input-group-append">
                     <span class="input-group-text">€/hour</span>
                    </div>
                </div>
            </div>
            <div class="col-sm" style="float:none;margin:auto;">
            <label for="masse_salariale">Masse salariale</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="35" id="masse_salariale" value="35" name="masse_salariale" aria-label="Amount (to the nearest euro)" />
                    <div class="input-group-append">
                     <span class="input-group-text">%</span>
                    </div>
                </div>
            </div>
            <div class="col-sm" style="float:none;margin:auto;">
            <label>Select a shifts</label>
              <select class="select2 form-control" multiple id="locationshift">
                <optgroup label="shifts">
                  @foreach($shiftData as $sftData)
                  <option value="{{$sftData->id}}">{{$sftData->name}}</option>
                  @endforeach
                </optgroup>
              </select>
            </div>
          </div>
        </form>
        <br>
        <br>
        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <!-- <button class="btn btn-success btn-submit">Submit</button> -->
          <a href="javascript:void(0);" onclick="submitStaffData();" class="btn btn-success">Submit</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Horizontal Wizard -->

<!-- Table without card start -->
  <div class="row" id="table-without-card">
    <div class="col-12 my-2">
      <h5 class="mb-1">Locations list</h5>
        <div class="table-responsive">
        <table class="locations-list-table table">
            <thead>
              <tr>
              <th></th>
                <th>Name</th>
                <th>Address</th>
                <th>Country</th>
                <th class="text-truncate">Staff</th>
                <th class="cell-fit">Actions</th>
            </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--/ List DataTable -->

@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/forms/wizard/bs-stepper.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>


  <script src="../../../company/datatables.min.js"></script>

  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap.min.js')) }}"></script>

  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.time.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/legacy.js')) }}"></script>

  <!-- <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script> -->


  <!-- TEST -->

@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/forms/form-wizard.js')) }}"></script>
  <script src="{{ asset('js/scripts/pages/app-location-list.js') }}?time=<?php echo time();?>"></script>

  <!-- TEST -->
  <script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/forms/form-number-input.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/components/components-navs.js')) }}"></script>

@endsection
