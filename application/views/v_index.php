<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="Proyecto de desarrollo de un producto wizard online que tenga un quiz y con una unica solucion que es SAP Business One">
    <meta name="keywords"               content="SAP,producto wizard">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="January 25, 2018"/>
    <meta name="language"               content="es">
    <meta name="theme-color"            content="#000000">
	<title>Encuestas Merino</title>
    <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.png">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>datetimepicker/css/bootstrap-material-datetimepicker.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.indigo.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
	<link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>engagement.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>roboto.css?v=<?php echo time();?>">
	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>index.css?v=<?php echo time();?>">
</head>
<body>
    <div class="fondo-imagen"></div>
	<section class="section">
		<div class="mdl-container">
            <div class="logo-home">
                <img src="<?php echo RUTA_IMG?>logo/logo_blanco.png">
            </div>
            <h2 class="title">HPE Latin America Hybrid IT Bootcamp</h2>
            <p class="subtitle">Your feedback is very important to us, please fill out this survey so we can improve future events.</p>
            <div id="idEncuesta" class="mdl-card mdl-card-encuesta">
                <div class="survey">
                    <p>Survey</p>
                </div>
                <div class="preguntas m-t-20">
                    <p class="title-question"><strong>1.</strong> Which session was more relevant for you?</p>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="session-1">
                                <input type="radio" id="session-1" class="mdl-radio__button" name="options" value="Welcome & Strategy">
                                <span class="mdl-radio__label">Welcome & Strategy</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="session-2">
                                <input type="radio" id="session-2" class="mdl-radio__button" name="options" value="Synergy">
                                <span class="mdl-radio__label">Synergy</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="session-3">
                                <input type="radio" id="session-3" class="mdl-radio__button" name="options" value="HPC">
                                <span class="mdl-radio__label">HPC</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="session-4">
                                <input type="radio" id="session-4" class="mdl-radio__button" name="options" value="Nimble Strategy">
                                <span class="mdl-radio__label">Nimble Strategy</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="session-5">
                                <input type="radio" id="session-5" class="mdl-radio__button" name="options" value="VmWare">
                                <span class="mdl-radio__label">VmWare</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="session-6">
                                <input type="radio" id="session-6" class="mdl-radio__button" name="options" value="Storage Portfolio Positioning">
                                <span class="mdl-radio__label">Storage Portfolio Positioning</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="session-7">
                                <input type="radio" id="session-7" class="mdl-radio__button" name="options" value="3PAR">
                                <span class="mdl-radio__label">3PAR</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="session-8">
                                <input type="radio" id="session-8" class="mdl-radio__button" name="options" value="Veeam">
                                <span class="mdl-radio__label">Veeam</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="session-9">
                                <input type="radio" id="session-9" class="mdl-radio__button" name="options" value="DAPR">
                                <span class="mdl-radio__label">DAPR</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="session-10">
                                <input type="radio" id="session-10" class="mdl-radio__button" name="options" value="Storage Big Data">
                                <span class="mdl-radio__label">Storage Big Data</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="session-11">
                                <input type="radio" id="session-11" class="mdl-radio__button" name="options" value="Brocade">
                                <span class="mdl-radio__label">Brocade</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="session-12">
                                <input type="radio" id="session-12" class="mdl-radio__button" name="options" value="DCN/VMware NSX">
                                <span class="mdl-radio__label">DCN/VMware NSX</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="session-13">
                                <input type="radio" id="session-13" class="mdl-radio__button" name="options" value="ProLiant Gen10">
                                <span class="mdl-radio__label">ProLiant Gen10</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="session-14">
                                <input type="radio" id="session-14" class="mdl-radio__button" name="options" value="MCS">
                                <span class="mdl-radio__label">MCS</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="session-15">
                                <input type="radio" id="session-15" class="mdl-radio__button" name="options" value="Apolo 2000">
                                <span class="mdl-radio__label">Apolo 2000</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="session-16">
                                <input type="radio" id="session-16" class="mdl-radio__button" name="options" value="Superdome Flex HANA">
                                <span class="mdl-radio__label">Superdome Flex HANA</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="session-17">
                                <input type="radio" id="session-17" class="mdl-radio__button" name="options" value="RedHat">
                                <span class="mdl-radio__label">RedHat</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="session-18">
                                <input type="radio" id="session-18" class="mdl-radio__button" name="options" value="PointNext">
                                <span class="mdl-radio__label">PointNext</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="session-19">
                                <input type="radio" id="session-19" class="mdl-radio__button" name="options" value="AMD">
                                <span class="mdl-radio__label">AMD</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="preguntas">
                    <p class="title-question"><strong>2.</strong> Which topic do you think we should focus more?</p>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="topic-1">
                                <input type="radio" id="topic-1" class="mdl-radio__button" name="options" value="Welcome & Strategy">
                                <span class="mdl-radio__label">Welcome & Strategy</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="topic-2">
                                <input type="radio" id="topic-2" class="mdl-radio__button" name="options" value="Synergy">
                                <span class="mdl-radio__label">Synergy</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="topic-3">
                                <input type="radio" id="topic-3" class="mdl-radio__button" name="options" value="HPC">
                                <span class="mdl-radio__label">HPC</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="topic-4">
                                <input type="radio" id="topic-4" class="mdl-radio__button" name="options" value="Nimble Strategy">
                                <span class="mdl-radio__label">Nimble Strategy</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="topic-5">
                                <input type="radio" id="topic-5" class="mdl-radio__button" name="options" value="VmWare">
                                <span class="mdl-radio__label">VmWare</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="topic-6">
                                <input type="radio" id="topic-6" class="mdl-radio__button" name="options" value="Storage Portfolio Positioning">
                                <span class="mdl-radio__label">Storage Portfolio Positioning</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="topic-7">
                                <input type="radio" id="topic-7" class="mdl-radio__button" name="options" value="3PAR">
                                <span class="mdl-radio__label">3PAR</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="topic-8">
                                <input type="radio" id="topic-8" class="mdl-radio__button" name="options" value="Veeam">
                                <span class="mdl-radio__label">Veeam</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="topic-9">
                                <input type="radio" id="topic-9" class="mdl-radio__button" name="options" value="DAPR">
                                <span class="mdl-radio__label">DAPR</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="topic-10">
                                <input type="radio" id="topic-10" class="mdl-radio__button" name="options" value="Storage Big Data">
                                <span class="mdl-radio__label">Storage Big Data</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="topic-11">
                                <input type="radio" id="topic-11" class="mdl-radio__button" name="options" value="Brocade">
                                <span class="mdl-radio__label">Brocade</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="topic-12">
                                <input type="radio" id="topic-12" class="mdl-radio__button" name="options" value="DCN/VMware NSX">
                                <span class="mdl-radio__label">DCN/VMware NSX</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="topic-13">
                                <input type="radio" id="topic-13" class="mdl-radio__button" name="options" value="ProLiant Gen10">
                                <span class="mdl-radio__label">ProLiant Gen10</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="topic-14">
                                <input type="radio" id="topic-14" class="mdl-radio__button" name="options" value="MCS">
                                <span class="mdl-radio__label">MCS</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="topic-15">
                                <input type="radio" id="topic-15" class="mdl-radio__button" name="options" value="Apolo 2000">
                                <span class="mdl-radio__label">Apolo 2000</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="topic-16">
                                <input type="radio" id="topic-16" class="mdl-radio__button" name="options" value="Superdome Flex HANA">
                                <span class="mdl-radio__label">Superdome Flex HANA</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="topic-17">
                                <input type="radio" id="topic-17" class="mdl-radio__button" name="options" value="RedHat">
                                <span class="mdl-radio__label">RedHat</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="topic-18">
                                <input type="radio" id="topic-18" class="mdl-radio__button" name="options" value="PointNext">
                                <span class="mdl-radio__label">PointNext</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="topic-19">
                                <input type="radio" id="topic-19" class="mdl-radio__button" name="options" value="AMD">
                                <span class="mdl-radio__label">AMD</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="preguntas">
                    <p class="title-question"><strong>3.</strong> In a future Bootcamp, which topic will you be interested to be in the Agenda?</p>
                    <div class="col-xs-12">
                        <div class="mdl-input">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="otro">
                                <label class="mdl-textfield__label" for="otro">Topic</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="preguntas">
                    <p class="title-question"><strong>4.</strong> Do you have any suggestions for a future event?</p>
                    <div class="col-xs-12">
                        <div class="mdl-input">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="otro">
                                <label class="mdl-textfield__label" for="otro">Suggestion</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="preguntas">
                    <p class="title-question"><strong>5.</strong> If you participated in any of the LABs provided, which one was more useful based on your area?</p>
                    <div class="col-xs-12">
                        <div class="mdl-input">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="otro">
                                <label class="mdl-textfield__label" for="otro">Suggestion</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="preguntas">
                    <p class="title-question"><strong>6.</strong> From 1 to 10, rate this event overall.</p>
                    <div class="col-xs-12">
                        <div class="mdl-input">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="otro">
                                <label class="mdl-textfield__label" for="otro">Suggestion</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="subtitle-encuesta">
                    <h2 class="subtitle">Datos Personales</h2>   
                </div>
                <div class="mdl-card__actions">
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="enviarEncuesta()">Enviar</button>
                </div>
            </div>
		</div>
	</section>
	<script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap/bootstrap.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>moment/moment.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>datetimepicker/js/bootstrap-material-datetimepicker.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>jquery-mask/jquery.mask.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jsmenu.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>index.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
    	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
        	$('select').selectpicker('mobile');
        } else {
            $('select').selectpicker();
        }
        initButtonCalendarDaysMaxToday('fechaNac');
        initMaskInputs('fechaNac');
    </script>
</body>
</html>