<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>
        Neighbor.ly Sign Up
    </title>

    <!-- <link rel="stylesheet" href="resources/css/login.css"> -->
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet" type="text/css" >
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;700;900&display=swap" rel="stylesheet"/>
</head>

<body>
    <div class="register-page">
        <img class="hero-bg" src="_images/hero-1.jpg" alt="description"/>
        <div class="header">
            <p class="title">
                <a href="/">Neighbor.ly</a>
            </p>
        </div>
        <div class="form">
            <form class="register" method="POST" action="{{url('/register')}}">
                {{ csrf_field() }}
                <div class="name">
                        <input type="text" name="fname" placeholder="first name" autofocus required/>
                        <input type="text" name="lname" placeholder="last name" required/>
                </div>
                <div class="other_info">
                    <input id="username" type="text" name="username" placeholder="username" pattern="^(?=[a-zA-Z0-9._]{4,12}$)(?!.*[_.]{2})[^_.].*[^_.]$" required title="Must be 4-12 characters"/>
                    <input id="password" type="password" name="password"placeholder="password" pattern=".{8,20}" required title="Must be 8-20 characters"/>
                    <input id="email" type="email" name="email" placeholder="email" required/>
                    <input id="phone" type="tel" name="phone" placeholder="phone (123-456-7890)" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required title="Phone Number"/>
                    <input type="date" name="dob" placeholder="date" required title="Date of Birth"/>
                    <select id="role" name="role" required title="Are you an Immigrant or a Visitor?">
                        <option value="" selected>Are you an Immigrant or a Visitor?</option>
                        <option value="IMMIGRANT">Immigrant</option>
                        <option value="VISITOR">Visitor</option>
                    </select>
                    <select id="previous_country" name="previous_country" required title="Select Home Country">
                        <option value="" selected>Select Home Country</option>
                        <option value="1">Afghanistan</option>
                        <option value="2">Albania</option>
                        <option value="3">Algeria</option>
                        <option value="4">American Samoa</option>
                        <option value="5">Andorra</option>
                        <option value="6">Angola</option>
                        <option value="7">Anguilla</option>
                        <option value="8">Antigua & Barbuda</option>
                        <option value="9">Argentina</option>
                        <option value="10">Armenia</option>
                        <option value="11">Aruba</option>
                        <option value="12">Australia</option>
                        <option value="13">Austria</option>
                        <option value="14">Azerbaijan</option>
                        <option value="15">Bahamas</option>
                        <option value="16">Bahrain</option>
                        <option value="17">Bangladesh</option>
                        <option value="18">Barbados</option>
                        <option value="19">Belarus</option>
                        <option value="20">Belgium</option>
                        <option value="21">Belize</option>
                        <option value="22">Benin</option>
                        <option value="23">Bermuda</option>
                        <option value="24">Bhutan</option>
                        <option value="25">Bolivia</option>
                        <option value="26">Bonaire</option>
                        <option value="27">Bosnia & Herzegovina</option>
                        <option value="28">Botswana</option>
                        <option value="29">Brazil</option>
                        <option value="30">British Indian Ocean Ter</option>
                        <option value="31">Brunei</option>
                        <option value="32">Bulgaria</option>
                        <option value="33">Burkina Faso</option>
                        <option value="34">Burundi</option>
                        <option value="35">Cambodia</option>
                        <option value="36">Cameroon</option>
                        <option value="37">Canada</option>
                        <option value="38">Canary Islands</option>
                        <option value="39">Cape Verde</option>
                        <option value="40">Cayman Islands</option>
                        <option value="41">Central African Republic</option>
                        <option value="42">Chad</option>
                        <option value="43">Channel Islands</option>
                        <option value="44">Chile</option>
                        <option value="45">China</option>
                        <option value="46">Christmas Island</option>
                        <option value="47">Cocos Island</option>
                        <option value="48">Colombia</option>
                        <option value="49">Comoros</option>
                        <option value="50">Congo</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote DIvoire">Cote DIvoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Curaco">Curacao</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="East Timor">East Timor</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands">Falkland Islands</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Ter">French Southern Ter</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Great Britain">Great Britain</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="India">India</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea North">Korea North</option>
                        <option value="Korea Sout">Korea South</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedonia">Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Midway Islands">Midway Islands</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Nambia">Nambia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherland Antilles">Netherland Antilles</option>
                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                        <option value="Nevis">Nevis</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau Island">Palau Island</option>
                        <option value="Palestine">Palestine</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Phillipines">Philippines</option>
                        <option value="Pitcairn Island">Pitcairn Island</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                        <option value="Republic of Serbia">Republic of Serbia</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="St Barthelemy">St Barthelemy</option>
                        <option value="St Eustatius">St Eustatius</option>
                        <option value="St Helena">St Helena</option>
                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                        <option value="St Lucia">St Lucia</option>
                        <option value="St Maarten">St Maarten</option>
                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                        <option value="Saipan">Saipan</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Samoa American">Samoa American</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Tahiti">Tahiti</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Erimates">United Arab Emirates</option>
                        <option value="United States of America">United States of America</option>
                        <option value="Uraguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican City State">Vatican City State</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                        <option value="Wake Island">Wake Island</option>
                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zaire">Zaire</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                     </select>
                </div>
                <button onclick="validation()">Sign Up</button>
                <p class="message">already a user? <a href="login">Login</a></p>
            </form>

        </div>
    </div>

    <script>
    function validation() {
        _phone = document.getElementById("phone").value;
        _email = document.getElementById("email").value;
        _username = document.getElementById("username").value;
        _password = document.getElementById("password").value;

        var mailformat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var phoneformat = /^[0-9]{3}-[0-9]{3}-[0-9]{4}/;
        var usernameformat = /^(?=[a-zA-Z0-9._]{4,12}$)(?!.*[_.]{2})[^_.].*[^_.]$/;
        var passwordformat = /^.{8,20}/

        if(!_username.match(usernameformat)){
            alert("You have entered an invalid username!");
            document.getElementById("username").focus();
        }
        if(!_password.match(passwordformat)){
            alert("You have entered an invalid password!");
            document.getElementById("password").focus();
        }
        if(!_email.match(mailformat)){
            alert("You have entered an invalid email address!");
            document.getElementById("email").focus();
        }
        if(!_phone.match(phoneformat)){
            alert("You have entered an invalid phone number!");
            document.getElementById("phone").focus();
        }

    }
    </script>

</body>

</html>

<!-- List of countries -->
<!-- https://www.technicalkeeda.com/html-tutorials/all-countries-drop-down-list-in-html -->
<!-- https://www.w3resource.com/javascript/form/email-validation.php -->
<!-- https://emailregex.com/ -->