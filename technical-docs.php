<?php 
$pageTitle = "Technical Documentation & Product Manuals | FORBIX SEMICON®";
$pageDescription = "Comprehensive technical documentation, product specifications, wiring diagrams, datasheets and installation manuals for FORBIX SEMICON wireless products. Download PDFs, wiring diagrams and certification details for nurse call, panic alarm, token display and long-range systems.";
$additionalHeadTags = '
    <link rel="canonical" href="https://www.forbixindia.com/technical-docs.php" />
    <meta property="og:url" content="https://www.forbixindia.com/technical-docs.php" />
';
include __DIR__ . '/includes/header.php'; 
?>

<link rel="stylesheet" href="assets/css/support.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script defer src="assets/js/support.js"></script>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-background"></div>
        <div class="container">
            <div class="hero-content">
                <div style="font-size: 4rem; margin-bottom: 1rem;">
                    <span class="material-icons" style="font-size: inherit; color: var(--primary);">description</span>
                </div>
                <h1>Technical Documentation & Product Manuals</h1>
                <p class="hero-subtitle">
                    Comprehensive technical documentation, specifications, and datasheets for all our wireless electronic products. 
                    Access detailed information to help you understand and implement our solutions effectively.
                </p>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- Quick Access Categories -->
        <section class="section">
            <h2 class="text-center mb-4">
                <span class="material-icons" style="color: var(--primary); vertical-align: middle; margin-right: 0.5rem;">folder_open</span>
                Document Categories
            </h2>
            
            <div class="grid grid-2 gap-4 mb-6">
                <!-- Product Catalog Section -->
                <div class="card shadow-lg border" style="border-color: var(--primary);">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark, #1e3a8a) 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">menu_book</span>
                            Product Catalogs
                        </h3>
                    </div>
                    <div class="card-content">
                        <div class="grid gap-2">
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <a href="docs/Product-brochure.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); display: flex; gap: 0.5rem; align-items: center; flex: 1;"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Product Brochure and Catalog</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <a href="docs/Brochure-2024-FORBIX-SEMICON.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); display: flex; gap: 0.5rem; align-items: center; flex: 1;"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Brochure 2024</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <a href="docs/Catalog-wireless-call-bell-FORBIX-SEMICON.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); display: flex; gap: 0.5rem; align-items: center; flex: 1;"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Wireless Call Bell Catalog</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <a href="docs/Catalog-Air-Quality-Monitors.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); display: flex; gap: 0.5rem; align-items: center; flex: 1;"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Air Quality Monitors Catalog</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <a href="docs/Catalog-Wireless-Alarm-Systems.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); display: flex; gap: 0.5rem; align-items: center; flex: 1;"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Wireless Alarm Systems Catalog</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <a href="docs/catalog-panic-alarm-system.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); display: flex; gap: 0.5rem; align-items: center; flex: 1;"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Panic Alarm System Catalog</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <a href="docs/catalog-motor-controller.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); display: flex; gap: 0.5rem; align-items: center; flex: 1;"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Motor Controller Catalog</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <a href="docs/catalog-wireless-calling-system.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); display: flex; gap: 0.5rem; align-items: center; flex: 1;"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Wireless Calling System Catalog</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <a href="docs/Catalog-Wireless-Calling-Systems.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); display: flex; gap: 0.5rem; align-items: center; flex: 1;"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Wireless Calling Systems - Full</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <a href="docs/catalog-wireless-peon-calling-system.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); display: flex; gap: 0.5rem; align-items: center; flex: 1;"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Peon Calling System Catalog</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <a href="docs/Water-Pump_controllers-FORBIX-SEMICON.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); display: flex; gap: 0.5rem; align-items: center; flex: 1;"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Water Pump Controllers Catalog</span></a>
                            </div>
                            <div class="flex flex-between">
                                <a href="docs/Product-catalog-wireless-panic-alarm.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); display: flex; gap: 0.5rem; align-items: center; flex: 1;"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Wireless Panic Alarm Catalog</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Policy & Warranty Section -->
                <div class="card shadow-lg border" style="border-color: var(--secondary);">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-dark, #374151) 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">gavel</span>
                            Policy & Warranty
                        </h3>
                    </div>
                    <div class="card-content">
                        <div class="grid gap-2">
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <a href="docs/Paperless-goGreen-Policy.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); display: flex; gap: 0.5rem; align-items: center; flex: 1;"><span class="material-icons" style="color: var(--secondary); font-size: 1rem;">eco</span><span>Paperless goGREEN Policy</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <a href="docs/Declaration-of-Conformity-1.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); display: flex; gap: 0.5rem; align-items: center; flex: 1;"><span class="material-icons" style="color: var(--secondary); font-size: 1rem;">verified</span><span>Declaration of Conformity-1</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <a href="docs/Declaration-of-Conformity-2.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); display: flex; gap: 0.5rem; align-items: center; flex: 1;"><span class="material-icons" style="color: var(--secondary); font-size: 1rem;">verified</span><span>Declaration of Conformity-2</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <a href="docs/WarrantyTerms.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); display: flex; gap: 0.5rem; align-items: center; flex: 1;"><span class="material-icons" style="color: var(--secondary); font-size: 1rem;">gpp_good</span><span>Warranty Terms</span></a>
                            </div>
                            <div class="flex flex-between">
                                <a href="docs/Vendor-registration-form.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); display: flex; gap: 0.5rem; align-items: center; flex: 1;"><span class="material-icons" style="color: var(--secondary); font-size: 1rem;">assignment</span><span>Vendor Registration Form</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Product Categories -->
        <section class="section">
            <h2 class="text-center mb-4">
                <span class="material-icons" style="color: var(--primary); vertical-align: middle; margin-right: 0.5rem;">category</span>
                Product Documentation Categories
            </h2>
            
            <div class="grid grid-3 gap-6 mb-8">
                <!-- Nurse Call Systems -->
                <div class="card shadow-lg border" style="border-color: var(--primary);">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark, #1e3a8a) 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">local_hospital</span>
                            Nurse Call Systems
                        </h3>
                    </div>
                    <div class="card-content" style="max-height: 400px; overflow-y: auto;">
                        <div class="grid gap-1" style="font-size: 0.8rem;">
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/Technical-Doc-Wireless-Nurse-Calling-System.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">Technical Doc - Wireless Nurse Calling System</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/Wireless-Nurse-Call-System-Solutions-FORBIX-SEMICON.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">Wireless Nurse Call System Solutions</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/WNCS-LCD-Monitor.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">WNCS LCD Monitor</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX521-spec-remote-controller.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX521 - Patient Call Button Remote</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX525-spec-patient-call-bell.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX525 - Patient Call Bell (discontinued)</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX528-wall-mount-pull-chord-IP65.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX528 - Wall Mount Pull Chord (IP65)</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX545-wall-mount-call-button-IP65.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX545 - Wall Mount Call Button (IP65)</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX528A-wall-mount-pull-chord.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX528A - Wall Mount Pull Chord</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXCSL02A-spec-nurse-station-2-digit.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXCSL02A - 2-digit Nurse Station</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXCSL03A-spec-nurse-station-3-digit.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXCSL03A - 3-digit Nurse Station</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXCSL04A-spec-nurse-station-4-digit.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXCSL04A - 4-digit Nurse Station</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXCSI20-20-indicator-receiver.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXCSI20A - 20-indicator Nurse Station</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXCI20-20-indicator-wired.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXCI20 - 20-indicator Wired</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX623-wall-mount-call-button.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX623 - Wall Mount Call Button (IP65)</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXRM01-02-03-04-room-module-indicator.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXRM01/02/03/04 - Room Indicator Module</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXDM01-spec-door-indicator-module.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXDM01 - Door Indicator Module</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXDM01-spec-door-indicator-module..pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXDM01 - Door Indicator Module (Alt)</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXCB01-code-blue-revolving-light.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXCB01 - Code Blue Revolving Light</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXCM30-corridor-module-indicator.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXCM30 - Corridor Module</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXDL04-data-logger.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXDL04 - Datalogger Receiver</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXCSRPT01-02-spec-repeater-booster.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXCSRPT01-02 - Repeater Booster</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXCSRPT01C-spec-repeater-booster.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXCSRPT01C - Repeater Booster IP65</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXRR01R5-1-port-wireless-relay-receiver.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXRR01R5 - 1-port Wireless Relay Receiver</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXRM01-spec-room-indicator-module.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXRM01 - Room Indicator Module Spec</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWCCS02-single-caller-3-attendant-call-bell.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWCCS02 - Single Caller 3 Attendant</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWCCS03-single-remote-dual-wireless-staff-call.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWCCS03 - Dual Wireless Staff Call</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWCCS04-single-point-wirless-staff-call-with-acknowledgement.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWCCS04 - Staff Call with Acknowledgement</a>
                            </div>
                            <div class="flex flex-between py-1">
                                <a href="docs/FBXWCCS05-dual-point-wirless-staff-call-with-acknowledgement.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWCCS05 - Dual Point Staff Call</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Panic Alarm Systems -->
                <div class="card shadow-lg border" style="border-color: var(--secondary);">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-dark, #a00847ff) 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">warning</span>
                            Panic Alarm Systems
                        </h3>
                    </div>
                    <div class="card-content" style="max-height: 400px; overflow-y: auto;">
                        <div class="grid gap-1" style="font-size: 0.8rem;">
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWAS01-spec-1remote-1siren.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWAS01R - 1 Remote Panic Alarm (108db)</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWAS01-spec-1remote-1siren-bookbox.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWAS01 - 1 Remote Panic Alarm Bookbox</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWAS02R-spec-2-remote-panic-alarm.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWAS02R - 2 Remote Wireless Siren (108db)</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWAS04R-spec-4-remote-panic-alarm.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWAS04R - 4 Remote Wireless Siren (108db)</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWAS06R-spec-6-remote-panic-alarm.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWAS06R - 6 Remote Wireless Siren (new design)</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXSB20-spec-indicator-siren-alarm.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXSB20 - 20 Remote Wireless Siren (108db)</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXSB01-siren.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXSB01 - Siren</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX625-spec-remote_controller.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX625 - Remote Controller</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX521A-spec-panic-alarm-transmitter.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX521A - Panic Alarm Button Transmitter</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX521B-spec-panic-alarm-transmitter.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX521B - Panic Alarm Button Transmitter</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXS01-spec-wireless-siren-108db.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXS01 - Indoors/Outdoors 108 Decibel Siren</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXS02-spec-wireless-siren-118db.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXS02 - 118 Decibel Siren</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXS03-spec-wireless-siren-130db.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXS03 - 130 dB Wireless Alarm</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXCSCR-wireless-revolving-light-beacon.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXCSCR - Code RED Revolving Light Beacon</a>
                            </div>
                            <div class="flex flex-between py-1">
                                <a href="docs/FBXCSBR-2-revolving-lights-receiver.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXCSBR - 2 Beacon Revolving Light (RED + BLUE)</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Long Range Systems -->
                <div class="card shadow-lg border" style="border-color: var(--success);">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--success) 0%, var(--success-dark, #654316ff) 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">satellite_alt</span>
                            Long Range Systems
                        </h3>
                    </div>
                    <div class="card-content" style="max-height: 400px; overflow-y: auto;">
                        <div class="grid gap-1" style="font-size: 0.8rem;">
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX701A-spec-long-range-transmitter.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX701A - Long Range Panic Button</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX701AS-spec-siren-transmitter.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX701AS - Siren Transmitter</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX701B-spec-panic-alarm-transmitter.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX701B - Panic Alarm Transmitter</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX7S05M-FBX7S01M-spec-long-range-receiver-118db-108db-siren.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX7S01M/FBX7S05M - Receiver Sirens</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX7RPT03-spec-long-range-repeater.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX7RPT03 - Long Range Repeater</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX7RXR01R30M-1-port-wireless-relay-receiver.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX7RXR01R30M - Long Range 1-port Relay</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX7RX-1-port-wireless-relay-receiver.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX7RX - Long Range 1-port Relay</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX7R01R5-1-port-wireless-relay-receiver.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX7R01R5 - 1-port Wireless Relay Receiver</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX7L02R-spec-receiver-display.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX7L02R - Receiver Display</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX7L02FM-2-digit-console-display-long-range-receiver.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX7L02FM - 2-digit Display Receiver</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX721-spec-remote-transmitter.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX721 - Remote Control</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX722-spec-remote-transmitter.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX722 - Remote Control</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX7R32I-32-indicator-long-range-receiver.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX7R32I - 32-indicator Long Range Receiver</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXS07-wireless-hooter.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXS07 - Wireless Hooter</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX711A-spec-11-channel-transmitter.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX711A - 11 Channel Transmitter</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX701A-FBXB01C-spec-panic-alarm-transmitter.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX701A + FBXB01C - Combo Spec</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX701A-FBXB01C-wiring-diagram.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX701A + FBXB01C - Wiring Diagram</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX701B-spec-transmitter-with-remote.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX701B - Transmitter with Remote</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX7L02S05M-receiver-siren-display.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX7L02S05M - Receiver Siren Display</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXB01C-spec.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXB01C - Beacon Spec</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXRC12-FBX7R11R5-remote-control-receiver.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXRC12/FBX7R11R5 - Remote Control Receiver</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/long-range-alarm-system-configurations.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">Long Range Alarm Configurations</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/Long-range-security-system-proposal.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">Long Range Security System Proposal</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/long-range-transmitter-FBXTX01-specification.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXTX01 - Long Range Transmitter</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/UM-FBXTX01A.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXTX01A - User Manual</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/Outdoor-MotionSensor-LongRange.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">Outdoor Motion Sensor - Long Range</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/handheld-long-range-transmitter-receiver-old-model.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">Handheld Long Range TX/RX (Legacy)</a>
                            </div>
                            <div class="flex flex-between py-1">
                                <a href="docs/FBX701B-FBX521A-spec-panic-alarm-transmitter.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX701B + FBX521A - Combo Spec</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-3 gap-6 mb-8">
                <!-- Water Pump Controllers -->
                <div class="card shadow-lg border" style="border-color: var(--primary);">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark, #07e2f1ff) 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">water_pump</span>
                            Water Pump Controllers
                        </h3>
                    </div>
                    <div class="card-content" style="max-height: 400px; overflow-y: auto;">
                        <div class="grid gap-1" style="font-size: 0.8rem;">
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXG1-GSM-manual-water-pump-controller.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXG1 - GSM Manual Water Pump Controller</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXPC01A-remote-motor-pump-controller.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXPC01A - Remote Motor Pump Controller</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXPC02A-remote-motor-pump-controller.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXPC02A - Remote Motor Pump Controller</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXPC02D-remote-motor-pump-controller.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXPC02D - Remote Motor Pump Controller</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXPC03-spec-wireless-pump-controller.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXPC03 - Wireless Pump Controller</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXPC03A-remote-motor-pump-controller.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXPC03A - Remote Motor Pump Controller</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXPC03D-remote-motor-pump-controller.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXPC03D - Remote Motor Pump Controller</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXPC05A-automatic-water-level-controller.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXPC05A - Automatic Water Level Controller</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/automatic-water-level-controller.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">Automatic Water Level Controller</a>
                            </div>
                            <div class="flex flex-between py-1">
                                <a href="docs/FBXPS01-spec-Solar-Battery-PowerSupply.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXPS01 - Solar Battery Power Supply</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Air Quality Monitors -->
                <div class="card shadow-lg border" style="border-color: var(--secondary);">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-dark, #eaee08ff) 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">air</span>
                            Air Quality Monitors
                        </h3>
                    </div>
                    <div class="card-content" style="max-height: 400px; overflow-y: auto;">
                        <div class="grid gap-1" style="font-size: 0.8rem;">
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXYF3DL-YellowFox3-VOC-Formaldehyde-monitor-datalogger.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXYF3DL - YellowFox-3 VOC Formaldehyde Monitor Datalogger</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXYF3DL-VOC-User-Manual.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXYF3DL - VOC User Manual</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/YellowFox-2T-CO2-monitor-tabletop.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); opacity: 0.7;">FBXYF2T - CO2 Monitor, Temperature, Humidity (discontinued)</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/YellowFox-1T-air-monitor-tabletop.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); opacity: 0.7;">FBXYF1T - Dust Monitor PM1/PM2.5/PM10 (discontinued)</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXYF1DL-YellowFox1-dust-monitor-datalogger.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); opacity: 0.7;">FBXYF1DL - Dust Monitor PM1/PM2.5/PM10 Datalogger (discontinued)</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/YellowFox-3T-VOC-Formaldehyde-monitor.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); opacity: 0.7;">FBXYF3T - VOC Formaldehyde Monitor Tabletop (discontinued)</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXDQML-spec-dust-monitor-laser.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); opacity: 0.7;">FBXDQML - Dust PM1.0/PM2.5/PM10.0 Monitor (discontinued)</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXTHM-VOC-monitor.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); opacity: 0.7;">FBXTHM - Total Hydrocarbon Monitor (discontinued)</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXLPG01-02-03-spec-LPG-detector-alarm.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary); opacity: 0.7;">FBXLPG01/02/03 - LPG Leakage Detector Alarm (discontinued)</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/CO2-Temp-Hum-Monitor-FBXTHCO2G.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXTHCO2G - CO2 Temp Humidity Monitor</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/CO2-Temp-Hum-Monitor-FBXTHCO2W.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXTHCO2W - CO2 Temp Humidity Monitor</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/Dust-CO2-Temp-Hum-Monitor-FBXDTHCO2.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXDTHCO2 - Dust CO2 Temp Humidity</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXDTHCO2-spec-co2-dust_temp-humidity-monitor.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXDTHCO2 - CO2 Dust Temp Humidity Spec</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXDQM-spec-dust-monitor.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXDQM - Dust Monitor Spec</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXFQM-spec-Formaldehyde-monitor.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXFQM - Formaldehyde Monitor</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXTHCA-spec-total-hydrocarbon-analyser.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXTHCA - Total Hydrocarbon Analyser</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/PM2.5-Air-Monitor-FBXDQMG.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">PM2.5 Air Monitor - FBXDQMG</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/PM2.5-Air-Monitor-FBXDQMW.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">PM2.5 Air Monitor - FBXDQMW</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/Formaldehyde-Monitor-FBXFQM01G.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXFQM01G - Formaldehyde Monitor</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/YellowFox-1-dust-monitor.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">YellowFox-1 Dust Monitor</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/YellowFox2-VOC-CO2-monitor-handheld.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">YellowFox-2 VOC CO2 Handheld</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/YellowFox3-VOC-Formaldehyde-monitor-handheld.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">YellowFox-3 VOC Handheld</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/Forbix-Semicon-YellowFox3-VOC-Formaldehyde-monitor.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">YellowFox3 VOC Monitor Brochure</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/UM-DQM.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">DQM User Manual</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/Why-VOC-monitors-needed-FORBIX-SEMICON.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">Why VOC Monitors Are Needed</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/VOC-Test-Certificate.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">VOC Test Certificate</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/Formaldehyde-Monitor-Test-Certificate.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">Formaldehyde Monitor Test Certificate</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/DTHCO2-Monitor-Test-Certificate.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">DTHCO2 Monitor Test Certificate</a>
                            </div>
                            <div class="flex flex-between py-1">
                                <a href="docs/Test-report-Formaldehyde-FBXYF3.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">Test Report - Formaldehyde FBXYF3</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Peon Call Systems -->
                <div class="card shadow-lg border" style="border-color: var(--success);">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--success) 0%, var(--success-dark, #166534) 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">notifications</span>
                            Peon Call Systems (1-32 Remote)
                        </h3>
                    </div>
                    <div class="card-content" style="max-height: 400px; overflow-y: auto;">
                        <div class="grid gap-1" style="font-size: 0.8rem;">
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS32-32remote-wireless-calling-system.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS32 - 32 Remote Calling System</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS20-20-indicator-receiver.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS20 - 20 Indicator Receiver</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS12-12remote-wireless-calling-system.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS12 - 12 Remote Calling System</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS12C-spec.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS12C - 12 Remote + Cancellation</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS11-spec.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS11 - 11 Remote Calling System</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS10-spec.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS10 - 10 Remote Calling System</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS09-9-button-peon-call.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS09 - 9 Remote Calling System</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS08-8-remote-calling-system.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS08 - 8 Remote Call Bell</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS06-spec.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS06 - 6 Remote Call Bell</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS06C-spec.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS06C - 6 Remote + Cancellation</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS05-spec.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS05 - 5 Remote Call Bell</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS04-spec.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS04 - 4 Remote Call Bell</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS03-spec.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS03 - 3 Remote Call Bell</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS02-spec.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS02 - 2 Remote Call Bell</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS01-spec.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS01 - 1 Remote Call Bell</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS03C-spec.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS03C - 3 Remote + Cancellation</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS06E-6-remote-and-cancellation-receiver.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS06E - 6 Remote Enhanced</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS09C-spec-9-button-peon-call-and-cancellation.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS09C - 9 Remote + Cancellation</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS10B-spec-10remote-2indicator-calling-system.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS10B - 10 Remote 2 Indicator</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS04Z-spec-customized-without-remote-cancel.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS04Z - 4 Remote (Customized)</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS08Z-spec-customized-without-remote-cancel.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS08Z - 8 Remote (Customized)</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS06-6-remote-calling-system.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS06 - 6 Remote (Detailed)</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWACS06-spec-6remote-peon-calling-system.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWACS06 - 6 Remote Peon Calling</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXWP06-spec-6-remote-wireless-pager.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXWP06 - 6 Remote Wireless Pager</a>
                            </div>
                            <div class="flex flex-between py-1">
                                <a href="docs/WACS02.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">WACS02 - 2 Remote Spec</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- New Sections Row -->
            <div class="grid grid-3 gap-6 mb-8">
                <!-- Traffic Light Systems -->
                <div class="card shadow-lg border" style="border-color: #dc2626;">
                    <div class="card-header" style="background: linear-gradient(135deg, #dc2626 0%, #f59e0b 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">traffic</span>
                            Traffic Light Systems
                        </h3>
                    </div>
                    <div class="card-content" style="max-height: 400px; overflow-y: auto;">
                        <div class="grid gap-1" style="font-size: 0.8rem;">
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXTLC01-spec-traffic-light-controller.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXTLC01 - Traffic Light Controller</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/Wireless-Automatic-Traffic-Light-Controller.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">Wireless Automatic Traffic Light Controller</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/traffic-light-scheme-for-common-way.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">Traffic Light Scheme - Common Way</a>
                            </div>
                            <div class="flex flex-between py-1">
                                <a href="docs/pedestrian-crossing-traffic-light-system.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">Pedestrian Crossing Traffic Light</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Customized Automation Solutions -->
                <div class="card shadow-lg border" style="border-color: #7c3aed;">
                    <div class="card-header" style="background: linear-gradient(135deg, #7c3aed 0%, #4f46e5 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">precision_manufacturing</span>
                            Customized Automation
                        </h3>
                    </div>
                    <div class="card-content" style="max-height: 400px; overflow-y: auto;">
                        <div class="grid gap-1" style="font-size: 0.8rem;">
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/car-parking-customized.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">Car Parking - Customized Solution</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/customised-vehicle-movement.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">Vehicle Movement System</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/train-detection-alarm-system.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">Train Detection Alarm System</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/unmanned-railway-crossing-train-detection-alarm.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">Unmanned Railway Crossing Alert</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/Wagon-Sensor.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">Wagon Sensor System</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/Firing-Target.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">Firing Target System</a>
                            </div>
                            <div class="flex flex-between py-1">
                                <a href="docs/FBXTFT01-spec-wireless-remote-calling-system.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXTFT01 - Wireless Remote Calling</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Token/Counter Display Systems -->
                <div class="card shadow-lg border" style="border-color: #db2777;">
                    <div class="card-header" style="background: linear-gradient(135deg, #db2777 0%, #ec4899 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">display_settings</span>
                            Token/Counter Display
                        </h3>
                    </div>
                    <div class="card-content" style="max-height: 400px; overflow-y: auto;">
                        <div class="grid gap-1" style="font-size: 0.8rem;">
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXTCS02-spec-Token-Control-System.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXTCS02 - Token Control System</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXTD02A-counter-system.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXTD02A - 2-digit Counter System</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXTD03A-counter-system.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXTD03A - 3-digit Counter System</a>
                            </div>
                            <div class="flex flex-between py-1">
                                <a href="docs/FBXTMR01-spec-timer.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXTMR01 - Timer Display</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Relay Receivers Section -->
            <div class="grid grid-2 gap-6 mb-8">
                <!-- Relay Receivers & Remote Control -->
                <div class="card shadow-lg border" style="border-color: #0d9488;">
                    <div class="card-header" style="background: linear-gradient(135deg, #0d9488 0%, #14b8a6 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">electrical_services</span>
                            Relay Receivers & Remote Control
                        </h3>
                    </div>
                    <div class="card-content" style="max-height: 400px; overflow-y: auto;">
                        <div class="grid gap-1" style="font-size: 0.8rem;">
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXRR01R5-1-port-wireless-relay-receiver.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXRR01R5 - 1-port Relay Receiver (5A)</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX3T-FBX3R05-3-port-transmitter-receiver.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX3T/FBX3R05 - 3-port TX/RX Set</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX521-FBX5XR1-spec-1remote-transmitter-receiver.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX521/FBX5XR1 - 1-Remote TX/RX</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX5XT4-FBX5XR4-spec-4channel-transmitter-receiver.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX5XT4/FBX5XR4 - 4-Channel TX/RX</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXCSR01R5-spec-relay-receiver-5Amps.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXCSR01R5 - Relay Receiver 5 Amps</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXCSR01R30-spec-relay-receiver-30Amps.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXCSR01R30 - Relay Receiver 30 Amps</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXCSR01RM30-wireless-relay-receiver.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXCSR01RM30 - Wireless Relay Receiver</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXCSR03R30C-spec-up-down-moverment.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXCSR03R30C - Up/Down Movement</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX7RXR01R30M-1-port-wireless-relay-receiver.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX7RXR01R30M - Long Range Relay 30A</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX7RX-1-port-wireless-relay-receiver.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX7RX - Long Range 1-port Relay</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX7R01R5-1-port-wireless-relay-receiver.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX7R01R5 - Long Range Relay 5A</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/relay-receiver-8port.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">8-Port Relay Receiver</a>
                            </div>
                            <div class="flex flex-between py-1">
                                <a href="docs/relay-receiver-10port.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">10-Port Relay Receiver</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- GSM & Keypad Systems -->
                <div class="card shadow-lg border" style="border-color: #0891b2;">
                    <div class="card-header" style="background: linear-gradient(135deg, #0891b2 0%, #06b6d4 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">dialpad</span>
                            GSM & Keypad Systems
                        </h3>
                    </div>
                    <div class="card-content" style="max-height: 400px; overflow-y: auto;">
                        <div class="grid gap-1" style="font-size: 0.8rem;">
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXAD01-spec-GSM-automatic-dialer.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXAD01 - GSM Automatic Dialer</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXKPD01-spec-keypad-dialer.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXKPD01 - Keypad Dialer</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBXKT34-spec-Keypad-Transmitter.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXKT34 - Keypad Transmitter</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <a href="docs/FBX622-spec-remote_controller.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBX622 - Remote Controller</a>
                            </div>
                            <div class="flex flex-between py-1">
                                <a href="docs/FBXG1-GSM-manual-water-pump-controller.pdf" target="_blank" style="text-decoration: none; color: var(--text-primary);">FBXG1 - GSM Manual Water Pump Controller</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Request Documentation Section -->
        <section class="section text-center">
            <div class="card shadow-lg">
                <div class="card-content">
                    <h2 style="color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">help_outline</span>
                        Need Specific Documentation?
                    </h2>
                    <p style="font-size: 1.125rem; margin-bottom: 2rem;">
                        Can't find the documentation you're looking for? Our technical team maintains comprehensive documentation 
                        for over <strong>150+ products</strong> including detailed specifications, wiring diagrams, and installation manuals.
                    </p>
                    
                    <div class="grid grid-3 gap-3 mb-4">
                        <div class="card border" style="border-color: var(--primary);">
                            <div class="flex gap-2">
                                <span class="material-icons" style="color: var(--primary);">folder</span>
                                <div>
                                    <strong>150+ Documents</strong><br>
                                    <span style="font-size: 0.9rem;">Complete technical library</span>
                                </div>
                            </div>
                        </div>
                        <div class="card border" style="border-color: var(--secondary);">
                            <div class="flex gap-2">
                                <span class="material-icons" style="color: var(--secondary);">update</span>
                                <div>
                                    <strong>Weekly Updates</strong><br>
                                    <span style="font-size: 0.9rem;">Latest revisions & new products</span>
                                </div>
                            </div>
                        </div>
                        <div class="card border" style="border-color: var(--success);">
                            <div class="flex gap-2">
                                <span class="material-icons" style="color: var(--success);">support</span>
                                <div>
                                    <strong>Expert Support</strong><br>
                                    <span style="font-size: 0.9rem;">Technical assistance available</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-center gap-3">
                        <a href="contact.php" class="btn btn-primary" style="font-size: 1.125rem; padding: 1rem 2rem;">
                            <span class="material-icons">email</span>
                            Request Specific Documents
                        </a>
                        <a href="products.php" class="btn btn-secondary" style="font-size: 1.125rem; padding: 1rem 2rem;">
                            <span class="material-icons">inventory</span>
                            Browse Products
                        </a>
                    </div>

                    <div class="card mt-4" style="background-color: var(--success-light); border-color: var(--success);">
                        <div class="flex flex-center gap-2">
                            <span class="material-icons" style="color: var(--success);">schedule</span>
                            <span>All documentation is available for immediate download. Technical support available for implementation assistance.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>