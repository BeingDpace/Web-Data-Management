<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Super Admin</title>
@extends('layouts.header')

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('home') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('login') }}" class="nav-link">Log Out</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('images/admin.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('dashboard') }}" class="d-block">Super Admin</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class

             with font-awesome or any other icon font library -->

             <li class="nav-item menu-open">
               <a href="{{ url('dashboard') }}" class="nav-link">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>
                   Dashboard
                   <i class="right fas fa-angle-left"></i>
                 </p>
               </a>
             </li>
          <li class="nav-item menu-open">
            <a href="{{ url('continents') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Continents
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ url('countries') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Countries
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="{{ url('schools') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Schools
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ url('hospitals') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Hospitals
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ url('visits') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Places to Visit
              </p>
            </a>
          </li>
            <li class="nav-item menu-open">
                <a href="{{ url('users') }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Users
                    </p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Countries</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Manage Countries</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Country</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method='post' action="{{route("countries.store")}}" name="mainform">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="countrynameinput">Select Country</label>
                      <select required type="text" class ='form-control' id="countrynameinput" name="country_name" onchange="if(!window.ableother){return;}ableother();">
                          <option value="" selected>Select Country</option>
                          <!-- The countries for Africa -->
                          <option>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ------ Africa ------</option>
                          <option value="DZ">Algeria</option>
                          <option value="AO">Angola</option>
                          <option value="BJ">Benin</option>
                          <option value="BW">Botswana</option>
                          <option value="BF">Burkina Faso</option>
                          <option value="BI">Burundi</option>
                          <option value="CM">Cameroon</option>
                          <option value="CV">Cape Verde</option>
                          <option value="CF">Central African Republic</option>
                          <option value="TD">Chad</option>
                          <option value="KM">Comoros</option>
                          <option value="CG">Congo</option>
                          <option value="CD">Congo, the Democratic Republic of the</option>
                          <option value="DJ">Dijibouti</option>
                          <option value="EG">Egypt</option>
                          <option value="GQ">Equatorial Guinea</option>
                          <option value="ER">Eritrea</option>
                          <option value="ET">Ethiopia</option>
                          <option value="GA">Gabon</option>
                          <option value="GM">Gambia</option>
                          <option value="GH">Ghana</option>
                          <option value="GN">Guinea</option>
                          <option value="GW">Guinea-Bissau</option>
                          <option value="CI">Cote d'Ivoire (Ivory Coast)</option>
                          <option value="KE">Kenya</option>
                          <option value="LS">Lesotho</option>
                          <option value="LR">Liberia</option>
                          <option value="LY">Libya</option>
                          <option value="MG">Madagascar</option>
                          <option value="MW">Malawi</option>
                          <option value="ML">Mali</option>
                          <option value="MR">Mauritania</option>
                          <option value="MU">Mauritius</option>
                          <option value="YT">Mayotte</option>
                          <option value="MA">Morocco</option>
                          <option value="MZ">Mozambique</option>
                          <option value="NA">Namibia</option>
                          <option value="NE">Niger</option>
                          <option value="NG">Nigeria</option>
                          <option value="RE">Reunion</option>
                          <option value="RW">Rwanda</option>
                          <option value="ST">Sao Tome and Principe</option>
                          <option value="SH">Saint Helena</option>
                          <option value="SN">Senegal</option>
                          <option value="SC">Seychelles</option>
                          <option value="SL">Sierra Leone</option>
                          <option value="SO">Somalia</option>
                          <option value="ZA">South Africa</option>
                          <option value="SS">South Sudan</option>
                          <option value="SD">Sudan</option>
                          <option value="SZ">Swaziland</option>
                          <option value="TZ">Tanzania</option>
                          <option value="TG">Togo</option>
                          <option value="TN">Tunisia</option>
                          <option value="UG">Uganda</option>
                          <option value="EH">Western Sahara</option>
                          <option value="ZM">Zambia</option>
                          <option value="ZW">Zimbabwe</option>
                          <!-- Then the countries for Antarctica -->
                          <option>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ------ Antarctica ------</option>
                          <option value="AQ">Antarctica</option>
                          <!-- Then the countries for Asia -->
                          <option>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  ------ Asia ------</option>
                          <option value="AF">Afghanistan</option>
                          <option value="AM">Armenia</option>
                          <option value="AZ">Azerbaijan</option>
                          <option value="BH">Bahrain</option>
                          <option value="BD">Bangladesh</option>
                          <option value="BT">Bhutan</option>
                          <option value="IO">British Indian Ocean Territory</option>
                          <option value="BN">Brunei Darussalam</option>
                          <option value="KH">Cambodia</option>
                          <option value="CN">China</option>
                          <option value="CX">Christmas Island</option>
                          <option value="CC">Cocos (Keeling) Islands</option>
                          <option value="GE">Georgia</option>
                          <option value="HK">Hong Kong</option>
                          <option value="IN">India</option>
                          <option value="ID">Indonesia</option>
                          <option value="IR">Iran</option>
                          <option value="IQ">Iraq</option>
                          <option value="IL">Israel</option>
                          <option value="JP">Japan</option>
                          <option value="JO">Jordan</option>
                          <option value="KZ">Kazakhstan</option>
                          <option value="KP">Korea, Democratic People's Republic of</option>
                          <option value="KR">Korea, Republic of</option>
                          <option value="KW">Kuwait</option>
                          <option value="KG">Kyrgyzstan</option>
                          <option value="LA">Lao</option>
                          <option value="LB">Lebanon</option>
                          <option value="MY">Malaysia</option>
                          <option value="MV">Maldives</option>
                          <option value="MN">Mongolia</option>
                          <option value="MM">Myanmar (Burma)</option>
                          <option value="NP">Nepal</option>
                          <option value="OM">Oman</option>
                          <option value="PK">Pakistan</option>
                          <option value="PH">Philippines</option>
                          <option value="QA">Qatar</option>
                          <option value="RU">Russian Federation</option>
                          <option value="SA">Saudi Arabia</option>
                          <option value="SG">Singapore</option>
                          <option value="LK">Sri Lanka</option>
                          <option value="SY">Syria</option>
                          <option value="TW">Taiwan</option>
                          <option value="TJ">Tajikistan</option>
                          <option value="TH">Thailand</option>
                          <option value="TP">East Timor</option>
                          <option value="TM">Turkmenistan</option>
                          <option value="AE">United Arab Emirates</option>
                          <option value="UZ">Uzbekistan</option>
                          <option value="VN">Vietnam</option>
                          <option value="YE">Yemen</option>
                          <!-- Then the countries for Oceania -->
                          <option>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ------ Oceania ------</option>
                          <option value="AS">American Samoa</option>
                          <option value="AU">Australia</option>
                          <option value="CK">Cook Islands</option>
                          <option value="FJ">Fiji</option>
                          <option value="PF">French Polynesia (Tahiti)</option>
                          <option value="GU">Guam</option>
                          <option value="KB">Kiribati</option>
                          <option value="MH">Marshall Islands</option>
                          <option value="FM">Micronesia, Federated States of</option>
                          <option value="NR">Nauru</option>
                          <option value="NC">New Caledonia</option>
                          <option value="NZ">New Zealand</option>
                          <option value="NU">Niue</option>
                          <option value="MP">Northern Mariana Islands</option>
                          <option value="PW">Palau</option>
                          <option value="PG">Papua New Guinea</option>
                          <option value="PN">Pitcairn</option>
                          <option value="WS">Samoa</option>
                          <option value="SB">Solomon Islands</option>
                          <option value="TK">Tokelau</option>
                          <option value="TO">Tonga</option>
                          <option value="TV">Tuvalu</option>
                          <option value="VU">Vanuatu</option>
                          <option valud="WF">Wallis and Futuna Islands</option>
                          <!-- Then the countries for Europe -->
                          <option>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ------ Europe ------</option>
                          <option value="GB">United Kingdom</option>
                          <option value="AL">Albania</option>
                          <option value="AD">Andorra</option>
                          <option value="AT">Austria</option>
                          <option value="BY">Belarus</option>
                          <option value="BE">Belgium</option>
                          <option value="BA">Bosnia and Herzegovina</option>
                          <option value="BG">Bulgaria</option>
                          <option value="HR">Croatia (Hrvatska)</option>
                          <option value="CY">Cyprus</option>
                          <option value="CZ">Czech Republic</option>
                          <option value="FR">France</option>
                          <option value="GI">Gibraltar</option>
                          <option value="DE">Germany</option>
                          <option value="GR">Greece</option>
                          <option value="VA">Holy See (Vatican City State)</option>
                          <option value="HU">Hungary</option>
                          <option value="IT">Italy</option>
                          <option value="LI">Liechtenstein</option>
                          <option value="LU">Luxembourg</option>
                          <option value="MK">Macedonia</option>
                          <option value="MT">Malta</option>
                          <option value="MD">Moldova</option>
                          <option value="MC">Monaco</option>
                          <option value="ME">Montenegro</option>
                          <option value="NL">Netherlands</option>
                          <option value="PL">Poland</option>
                          <option value="PT">Portugal</option>
                          <option value="RO">Romania</option>
                          <option value="SM">San Marino</option>
                          <option value="RS">Serbia</option>
                          <option value="SK">Slovakia</option>
                          <option value="SI">Slovenia</option>
                          <option value="ES">Spain</option>
                          <option value="UA">Ukraine</option>
                          <option value="DK">Denmark</option>
                          <option value="EE">Estonia</option>
                          <option value="FO">Faroe Islands</option>
                          <option value="FI">Finland</option>
                          <option value="GL">Greenland</option>
                          <option value="IS">Iceland</option>
                          <option value="IE">Ireland</option>
                          <option value="LV">Latvia</option>
                          <option value="LT">Lithuania</option>
                          <option value="NO">Norway</option>
                          <option value="SJ">Svalbard and Jan Mayen Islands</option>
                          <option value="SE">Sweden</option>
                          <option value="CH">Switzerland</option>
                          <option value="TR">Turkey</option>
                          <!-- Then the countries for North America -->
                          <option>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ------North America ------</option>
                          <option value="US">United States</option>
                          <option value="UM">United States Minor Outlying Islands</option>
                          <option value="CA">Canada</option>
                          <option value="MX">Mexico</option>
                          <option value="AI">Anguilla</option>
                          <option value="AG">Antigua and Barbuda</option>
                          <option value="AW">Aruba</option>
                          <option value="BS">Bahamas</option>
                          <option value="BB">Barbados</option>
                          <option value="BZ">Belize</option>
                          <option value="BM">Bermuda</option>
                          <option value="VG">British Virgin Islands</option>
                          <option value="KY">Cayman Islands</option>
                          <option value="CR">Costa Rica</option>
                          <option value="CU">Cuba</option>
                          <option value="DM">Dominica</option>
                          <option value="DO">Dominican Republic</option>
                          <option value="SV">El Salvador</option>
                          <option value="GD">Grenada</option>
                          <option value="GP">Guadeloupe</option>
                          <option value="GT">Guatemala</option>
                          <option value="HT">Haiti</option>
                          <option value="HN">Honduras</option>
                          <option value="JM">Jamaica</option>
                          <option value="MQ">Martinique</option>
                          <option value="MS">Montserrat</option>
                          <option value="AN">Netherlands Antilles</option>
                          <option value="NI">Nicaragua</option>
                          <option value="PA">Panama</option>
                          <option value="PR">Puerto Rico</option>
                          <option value="KN">Saint Kitts and Nevis</option>
                          <option value="LC">Saint Lucia</option>
                          <option value="VC">Saint Vincent and the Grenadines</option>
                          <option value="TT">Trinidad and Tobago</option>
                          <option value="TC">Turks and Caicos Islands</option>
                          <option value="VI">US Virgin Islands</option>
                          <!-- Then the countries for South America -->
                          <option>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ------ South America ------</option>
                          <option value="AR">Argentina</option>
                          <option value="BO">Bolivia</option>
                          <option value="BR">Brazil</option>
                          <option value="CL">Chile</option>
                          <option value="CO">Colombia</option>
                          <option value="EC">Ecuador</option>
                          <option value="FK">Falkland Islands (Malvinas)</option>
                          <option value="GF">French Guiana</option>
                          <option value="GY">Guyana</option>
                          <option value="PY">Paraguay</option>
                          <option value="PE">Peru</option>
                          <option value="SR">Suriname</option>
                          <option value="UY">Uruguay</option>
                          <option value="VE">Venezuela</option>
                      </select>
                      <label for="continentnameinput">Select Continent</label>
                      <select required type="text" class="form-control" name="continent_name" id="continentnameinput" onChange="if(!window.refillme){return;}refillme();">
                          <option value="" selected>Select Continent</option>
                          <option value="AF">Africa</option>
                          <option value="AN">Antarctica</option>
                          <option value="AS">Asia</option>
                          <option value="OC">Oceania</option>
                          <option value="EU">Europe</option>
                          <option value="NA">North America</option>
                          <option value="SA">South America</option>
                      </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <div class="container">
      <p>&copy; Group X, CSE 5335-002 -Spring 2021 <br/>
        Daniel Evilsizor , Muraj Shrestha, Deepesh Bhatta </p>
    </div>
  </footer><!-- /.main-footer -->
</div>

</body>
</html>
