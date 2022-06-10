@extends('layouts.app')

@section('content')
<div class="uk-container">
    <form action="{{ route('save-patient') }}" method="POST">
        @csrf
        <input type="hidden" name="doctor_id" value="{{ Auth::id() }}">
        <ul uk-tab uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
            <li><a href="#">Bio</a></li>
            <li><a href="#">Clinical View</a></li>
            <li><a href="#">Medication</a></li>
            <li><a href="#">Nutrition</a></li>
            <li><a href="#">ECG</a></li>
        </ul>
        <ul class="uk-switcher uk-margin">
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-body uk-column-1-2">
                        <div class="uk-margin">
                            <div class="uk-form-control">
                                <input type="hidden" name="reg_num" value="{{ $regNum }}">
                                <input type="text" name="name" placeholder="Patient Name">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <div class="uk-form-control">
                                <input type="text" name="mrid" placeholder="MR ID">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <div class="uk-form-control">
                                <input type="text" name="age" placeholder="Age">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <div class="uk-form-control">
                                <input type="text" name="birthdate" placeholder="Birthdate" class="date">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <div class="uk-form-control">
                                <input type="text" name="phone" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <div class="uk-form-control">
                                <select name="gender" placeholder="Select Gender">
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <div class="uk-form-control">
                                <textarea name="diagnosis" placeholder="Diagnosis" row="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-footer">
                        <a href="#" class="uk-button uk-button-primary uk-align-right" uk-switcher-item="next">Next</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-body uk-column-1-2">
                        <div class="uk-margin">
                            <div class="uk-form-control">
                                <label class="uk-margin-small">Blood Pressure</label>
                                <div class="uk-flex">
                                    <input type="text" name="blood[systolic]" placeholder="systolic">
                                    <span class="uk-margin uk-margin-small">&nbsp;/&nbsp;</span>
                                    <input type="text" name="blood[diastolic]" placeholder="diastolic">
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <div class="uk-form-control">
                                <input type="text" name="bpm" placeholder="Pulse (bpm)">
                                <span></span>
                            </div>
                        </div>
                        <legend class="uk-margin">History
                            <div class="uk-margin uk-child-width-1-2@m uk-grid uk-column">
                                <label class="uk-margin-small"><input class="uk-checkbox" type="checkbox" name="hf"> HF</label>
                                <label class="uk-margin-small"><input class="uk-checkbox" type="checkbox" name="pci"> PCI/CABG</label>
                                <label class="uk-margin-small"><input class="uk-checkbox" type="checkbox" name="valve"> Valve OP</label>
                                <label class="uk-margin-small"><input class="uk-checkbox" type="checkbox" name="hipoperfusi"> Hipoperfusi Perivier</label>
                                <label class="uk-margin-small"><input class="uk-checkbox" type="checkbox" name="edema"> Edema Perivier</label>
                                <label class="uk-margin-small"><input class="uk-checkbox" type="checkbox" name="micad"> Old MI/CAD</label>
                                <label class="uk-margin-small"><input class="uk-checkbox" type="checkbox" name="diabetic"> Diabetic / Prediabetic</label>
                                <label class="uk-margin-small"><input class="uk-checkbox" type="checkbox" name="anoreksia"> Anoreksia</label>
                                <label class="uk-margin-small"><input class="uk-checkbox" type="checkbox" name="hypertension"> Hypertension</label>
                                <label class="uk-margin-small"><input class="uk-checkbox" type="checkbox" name="smoking"> Smoking</label>
                                <label class="uk-margin-small"><input class="uk-checkbox" type="checkbox" name="dialysis"> Dialysis</label>
                                <label class="uk-margin-small"><input class="uk-checkbox" type="checkbox" name="chemotherapy"> Chemotherapy</label>
                            </div>
                        </legend>
                    </div>
                    <div class="uk-card-footer">
                        <a href="#" class="uk-button uk-button-primary uk-align-right" uk-switcher-item="next">Next</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-body uk-column-1-2">
                        <div class="">
                            <label class="uk-form-label">Furosemide</label>
                            <div class="uk-form-controls">
                                <input type="text" id="furosemide" name="furosemide" class="uk-input uk-margin-small" value="" placeholder="0">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label uk-width-1-3@m">ACE-I</label>
                            <div class="uk-column-1-2">
                                <div>
                                    <input type="text" id="acei-dose" name="acei[dose]" class="uk-input" value="" placeholder="0">
                                </div>
                                <div>
                                    <input type="text" id="acei-name" name="acei[name]" class="uk-input" value="" placeholder="Name">
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label uk-width-1-3@m">ARB</label>
                            <div class="uk-column-1-2">
                                <div>
                                    <input type="text" id="arb-dose" name="arb[dose]" class="uk-input" value="" placeholder="0">
                                </div>
                                <div>
                                    <input type="text" id="arb-name" name="arb[name]" class="uk-input" value="" placeholder="Name">
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label uk-width-1-3@m">Beta Blockers</label>
                            <div class="uk-column-1-2">
                                <div>
                                    <input type="text" id="bblock-dose" name="bblock[dose]" class="uk-input" value="" placeholder="0">
                                </div>
                                <div>
                                    <input type="text" id="bblock-name" name="bblock[name]" class="uk-input" value="" placeholder="Name">
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label">MRA</label>
                            <div class="uk-form-controls">
                                <input type="text" id="mra" name="mra" class="uk-input uk-margin-small" value="" placeholder="0">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label">Ivabradine</label>
                            <div class="uk-form-controls">
                                <input type="text" id="ivabradine" name="ivabradine" class="uk-input uk-margin-small" value="" placeholder="0">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label">Digoxin</label>
                            <div class="uk-form-controls">
                                <input type="text" id="digoxin" name="furosemide" class="uk-input uk-margin-small" value="" placeholder="0">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label uk-width-1-3@m">Other Heart Medicine</label>
                            <div class="uk-column-1-2">
                                <div>
                                    <input type="text" id="other-heart-dose" name="oh[dose]" class="uk-input" value="" placeholder="0">
                                </div>
                                <div>
                                    <input type="text" id="other-heart-name" name="oh[name]" class="uk-input" value="" placeholder="Name">
                                </div>
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label uk-width-1-3@m">Other Non-Heart Medicine</label>
                            <div class="uk-column-1-2">
                                <div>
                                    <input type="text" id="other-nonheart-dose" name="onh[dose][]" class="uk-input" value="" placeholder="0">
                                </div>
                                <div>
                                    <input type="text" id="other-nonheart-name" name="onh[name][]" class="uk-input" value="" placeholder="Name">
                                </div>
                            </div>
                            <div class="uk-column-1-2">
                                <div>
                                    <input type="text" id="other-nonheart-dose" name="onh[dose][]" class="uk-input" value="" placeholder="0">
                                </div>
                                <div>
                                    <input type="text" id="other-nonheart-name" name="onh[name][]" class="uk-input" value="" placeholder="Name">
                                </div>
                            </div>
                            <div class="uk-column-1-2">
                                <div>
                                    <input type="text" id="other-nonheart-dose" name="onh[dose][]" class="uk-input" value="" placeholder="0">
                                </div>
                                <div>
                                    <input type="text" id="other-nonheart-name" name="onh[name][]" class="uk-input" value="" placeholder="Name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-footer">
                        <a href="#" class="uk-button uk-button-primary uk-align-right" uk-switcher-item="next">Next</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-body uk-column-1-2">
                        <div class="uk-margin">
                            <label class="uk-form-label">Weight</label>
                            <div class="uk-form-controls">
                                <input type="text" id="weight" name="weight" class="uk-input uk-margin-small" value="" placeholder="0">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label">Height</label>
                            <div class="uk-form-controls">
                                <input type="text" id="height" name="height" class="uk-input uk-margin-small" value="" placeholder="0">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label">BSA</label>
                            <div class="uk-form-controls">
                                <input type="text" id="bsa" name="bsa" class="uk-input uk-margin-small" value="" placeholder="0">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label">BMI</label>
                            <div class="uk-form-controls">
                                <input type="text" id="bmi" name="bmi" class="uk-input uk-margin-small" value="" placeholder="0">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label">Albumin</label>
                            <div class="uk-form-controls">
                                <input type="text" id="albumin" name="albumin" class="uk-input uk-margin-small" value="" placeholder="0">
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-footer">
                        <a href="#" class="uk-button uk-button-primary uk-align-right" uk-switcher-item="next">Next</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-body uk-column-1-2">
                        <div class="uk-margin">
                            <label class="uk-form-label">Hb</label>
                            <div class="uk-form-controls">
                                <input type="text" id="hb" name="hb" class="uk-input uk-margin-small" value="" placeholder="g/dl">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label">Ht</label>
                            <div class="uk-form-controls">
                                <input type="text" id="ht" name="ht" class="uk-input uk-margin-small" value="" placeholder="%">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label">Leukosit</label>
                            <div class="uk-form-controls">
                                <input type="text" id="leukosit" name="leukosit" class="uk-input uk-margin-small" value="" placeholder="/ul">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label">Uric Acid</label>
                            <div class="uk-form-controls">
                                <input type="text" id="uric_acid" name="uric_acid" class="uk-input uk-margin-small" value="" placeholder="mg/dl">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label">Blood Sugar (Sewaktu)</label>
                            <div class="uk-form-controls">
                                <input type="text" id="gds" name="gds" class="uk-input uk-margin-small" value="" placeholder="g/dl">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label">Blood Sugar (Puasa)</label>
                            <div class="uk-form-controls">
                                <input type="text" id="gdf" name="gdf" class="uk-input uk-margin-small" value="" placeholder="g/dl">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label">Blood Sugar (2JPP)</label>
                            <div class="uk-form-controls">
                                <input type="text" id="gdj" name="gdj" class="uk-input uk-margin-small" value="" placeholder="g/dl">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label">Natrium</label>
                            <div class="uk-form-controls">
                                <input type="text" id="natrium" name="natrium" class="uk-input uk-margin-small" value="" placeholder="mmol/l">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label">Calium</label>
                            <div class="uk-form-controls">
                                <input type="text" id="calium" name="calium" class="uk-input uk-margin-small" value="" placeholder="mmol/l">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label">FT4</label>
                            <div class="uk-form-controls">
                                <input type="text" id="ft4" name="ft4" class="uk-input uk-margin-small" value="" placeholder="0">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label">TSH</label>
                            <div class="uk-form-controls">
                                <input type="text" id="tsh" name="calium" class="uk-input uk-margin-small" value="" placeholder="0">
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-footer">
                        <a href="#" uk-switcher-item="previous">Previous</a>
                    </div>
                </div>
            </li>
        </ul>
    </form>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/imask/6.0.5/imask.min.js"></script>
<script>
    $(document).ready(function() {
        $('input[type=text]').addClass("uk-input");
        $('select').addClass("uk-select");
        $('textarea').addClass("uk-textarea");
        $('input[type=checkbox]').addClass("uk-checkbox");
    });
</script>
@endsection