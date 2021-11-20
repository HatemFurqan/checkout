<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <style>
        * {
            direction: rtl;
            margin: 0;
            padding: 0
        }

        html {
            height: 100%
        }

        p {
            color: grey
        }

        #heading {
            text-transform: uppercase;
            color: #673AB7;
            font-weight: normal
        }

        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;
            position: relative
        }

        .form-card {
            text-align: left
        }

        /*#msform fieldset:not(:first-of-type) {*/
        /*    display: none*/
        /*}*/

        #msform input,
        #msform textarea {
            padding: 8px 15px 8px 15px;
            border: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            background-color: #ECEFF1;
            font-size: 16px;
            letter-spacing: 1px
        }

        #msform input:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #673AB7;
            outline-width: 0
        }

        #msform .action-button {
            width: 100px;
            background: #673AB7;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 0px 10px 5px;
            float: right
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            background-color: #311B92
        }

        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px 10px 0px;
            float: right
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            background-color: #000000
        }

        .card {
            z-index: 0;
            border: none;
            position: relative
        }

        .fs-title {
            font-size: 25px;
            color: #673AB7;
            margin-bottom: 15px;
            font-weight: normal;
            text-align: left
        }

        .purple-text {
            color: #673AB7;
            font-weight: normal
        }

        .steps {
            font-size: 25px;
            color: gray;
            margin-bottom: 10px;
            font-weight: normal;
            text-align: right
        }

        .fieldlabels {
            color: gray;
            text-align: left
        }

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey
        }

        #progressbar .active {
            color: #673AB7
        }

        #progressbar li {
            list-style-type: none;
            font-size: 15px;
            width: 50%;
            float: left;
            position: relative;
            font-weight: 400
        }

        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f13e"
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007"
        }

        #progressbar #questions:before {
            font-family: FontAwesome;
            content: "\f007"
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f030"
        }

        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c"
        }

        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #673AB7
        }

        .progress {
            height: 20px
        }

        .progress-bar {
            background-color: #673AB7
        }

        .fit-image {
            width: 100%;
            object-fit: cover
        }
    </style>

    <style>*,*::after,*::before{box-sizing:border-box}html{padding:1rem;background-color:#FFF;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif}#payment-form{width:31.5rem;margin:0 auto}iframe{width:100%}.one-liner{display:flex;flex-direction:column}#pay-button{border:none;border-radius:3px;color:#FFF;font-weight:500;height:40px;width:100%;background-color:#13395E;box-shadow:0 1px 3px 0 rgba(19,57,94,0.4)}#pay-button:active{background-color:#0B2A49;box-shadow:0 1px 3px 0 rgba(19,57,94,0.4)}#pay-button:hover{background-color:#15406B;box-shadow:0 2px 5px 0 rgba(19,57,94,0.4)}#pay-button:disabled{background-color:#697887;box-shadow:none}#pay-button:not(:disabled){cursor:pointer}.card-frame{border:solid 1px #13395E;border-radius:3px;width:100%;margin-bottom:8px;height:40px;box-shadow:0 1px 3px 0 rgba(19,57,94,0.2)}.card-frame.frame--rendered{opacity:1}.card-frame.frame--rendered.frame--focus{border:solid 1px #13395E;box-shadow:0 2px 5px 0 rgba(19,57,94,0.15)}.card-frame.frame--rendered.frame--invalid{border:solid 1px #D96830;box-shadow:0 2px 5px 0 rgba(217,104,48,0.15)}.success-payment-message{color:#13395E;line-height:1.4}.token{color:#b35e14;font-size:0.9rem;font-family:monospace}@media screen and (min-width: 31rem){.one-liner{flex-direction:row}.card-frame{width:318px;margin-bottom:0}#pay-button{width:175px;margin-left:8px}}</style>

</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-9 col-md-12 col-lg-6 col-xl-8 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2 id="heading text-right">التسجيل في الفصل الأول 2021</h2>

                    <div id="msform">

                        <!-- General info and registration -->
                        <fieldset>
                            <form action="" method="POST" id="main-form">
                                <div class="form-card">

                                <p class="text-right bold" style="line-height: 2">
                                    أعزاءنا أولياء الأمور.. نفيدكم بأنه تم فتح مجال التسجيل للفصل الأول 2021 للطلاب المنتظمين بنظام التعليم عن بعد وستكون بداية الفصل الدراسي الأول للطلاب والطالبات من تاريخ 29/08/2021م الموافق 21/01/1443هـ إلى 31/12/2021م الموافق 26/05/1443هـ.

                                    ملاحظة:

                                    للتسجيل في نظام التعليم الفردي (عن بعد) يمكنكم التسجيل في قائمة الانتظار بالضغط هنا.

                                    -

                                    في حال وجود استفسارات حول آليات سداد الرسوم وخيارات الدفع المتاحة نفيدكم أنه قد تم تخصيص أحد ممثلي قسم الحسابات للرد على استفساراتكم حيال الأمر وتقديم الدعم الكامل عبر المكتب الافتراضي لحل أي عوائق إن شاء الله..

                                    رابط المكتب الافتراضي:

                                    https://furqangroup.zoom.us/j/99947595293

                                    الأسئلة الشائعة:

                                    /

                                    أوقات الاستقبال من (الأحد إلى الخميس):

                                    9:00 صباحا - 10:00 مساء بتوقيت مكة المكرمة (GMT+3)

                                    8:00 صباحا - 09:00 مساء بتوقيت المغرب العربي وفرنسا (GMT+1)

                                    2:00 صباحا - 03:00 مساء بتوقيت نيويورك ( GMT-5)

                                    مع تمنياتنا للجميع بالتوفيق والنجاح.

                                </p>
                                <br>

                                <div id="accordion" class="text-right">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    ما هي وسائل الدفع المتاحة للسداد؟
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                حسب ما تم شرحه في اجتماع أولياءالأمور؛ هناك 3 وسائل لسداد الرسوم الدراسية:


                                                1- البطاقة الائتمانية.

                                                2- التحويل الدولي بنك HSBC.

                                                3- التحويل داخل السعودية (الراجحي).

                                                علما أن الخيار الأول (السداد عبر البطاقة الائتمانية) هو الخيار الأفضل للسداد.

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    هل زادت الرسوم الدراسية؟
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                لا.. الرسوم الدراسية كما هي 295$ (1100 ريال)، ولكن تمت إضافة رسوم وسيلة الدفع فقط.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    لماذا رسوم التحويل البنكي ل (بنك الراجحي) مرتفعة؟
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                نظرا لأن الشركة التي تم التعاقد معها هي شركة دولية عالمية ولا يوجد لديها حساب بنكي داخل السعودية ، وقد طلبت إدارة الفرقان توفير حساب (مؤقت) تسهيلا على أولياء الأمور وقد وافقت الشركة على ذلك بعد فرض 190 ريال رسوم إدارية خاصة بعمليات التحويل.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <h5 class="mb-0">
                                                <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                                    لدي عدة أبناء ولا أرغب بتحمل الرسوم البنكية عن كل طالب؟
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                            <div class="card-body">
                                                في هذه الحالة ننصحك باختيار وسيلة الدفع عبر التحويل الدولي إلى بنك HSBC والتحويل دفعة واحدة بحيث تكون القيمة كالتالي:

                                                الرسوم الدراسية 295$*عدد الأبناء + 15$ رسوم بنكية (تدفع لمرة واحدة فقط).

                                                -

                                                :مثال

                                                لديك 3 أبناء مسجلين في المركز، ستقوم بإجراء حوالة دولية واحدة لبنك HSBC بقيمة: 295$*3 = 885$ + 15$= 900$ فقط.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">القسم</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>اختر...</option>
                                        <option value="1">بنين</option>
                                        <option value="2">بنات</option>
                                    </select>
                                </div>

                                <div class="form-group text-right">
                                    <label for="exampleInputEmail1" class="text-right">الرقم التسلسلي:</label>
                                    <input type="number" min="0" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="الرقم التسلسلي">
                                </div>

                                <button type="button" class="btn btn-primary w-100">بحث</button>

                                <br>
                                <br>

                                <div class="form-group text-right">
                                    <label for="exampleInputEmail1" class="text-right">الأسم:</label>
                                    <input type="text" min="0" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="...">
                                </div>

                                <div id="std-private-info" class="">

                                    <div class="form-group text-right">
                                        <label for="std-email">البريد الالكتروني:</label>
                                        <input type="email" class="form-control" id="std-email" placeholder="البريد الالكتروني">
                                    </div>
                                    <div class="form-group text-right">
                                        <label for="std-email-conf">تأكيد البريد الالكتروني:</label>
                                        <input type="email" class="form-control" id="std-email-conf" placeholder="تأكيد البريد الالكتروني">
                                    </div>

                                    <div class="form-check text-right">
                                        <lable class="text-right bold">هل تود تغيير موعد الفترة في الفصل الأول؟ *</lable>

                                        <br>
                                        <br>

                                        <input class="form-check-input w-auto" type="radio" name="change_period" id="change_period1" value="yes">
                                        <label class="form-check-label mr-4" for="change_period1">
                                            لا.. حيث أود الاستمرار في نفس الموعد الحالي.
                                        </label>
                                    </div>
                                    <div class="form-check text-right">
                                        <input class="form-check-input w-auto" type="radio" name="change_period" id="change_period2" value="no">
                                        <label class="form-check-label mr-4" for="change_period2">
                                            نعم.. أرغب بتغيير الموعد في الفصل الأول.
                                        </label>
                                    </div>

                                    <br>
                                    <br>

                                    <div id="periods" class="d-none">
                                        <div class="form-check text-right">
                                            <input class="form-check-input w-auto" type="radio" name="period" id="period1" value="period1">
                                            <label class="form-check-label mr-4" for="period1">
                                                الفترة الصباحية (9:00 - 12:00 ظهرا بتوقيت مكة المكرمة GMT+3)
                                            </label>
                                        </div>
                                        <div class="form-check text-right">
                                            <input class="form-check-input w-auto" type="radio" name="period" id="period2" value="period2">
                                            <label class="form-check-label mr-4" for="period2">
                                                الفترة المسائية 1 (3:00 - 6:00 مساء بتوقيت مكة المكرمة GMT+3)
                                            </label>
                                        </div>
                                        <div class="form-check text-right">
                                            <input class="form-check-input w-auto" type="radio" name="period" id="period3" value="period3">
                                            <label class="form-check-label mr-4" for="period3">
                                                الفترة المسائية 2 (7:00 - 10:00 مساء بتوقيت مكة المكرمة GMT+3)
                                            </label>
                                        </div>
                                        <div class="form-check text-right">
                                            <input class="form-check-input w-auto" type="radio" name="period" id="period4" value="period4">
                                            <label class="form-check-label mr-4" for="period4">
                                                الفترة المسائية 3 (11:00 - 2:00 ليلا بتوقيت مكة المكرمة GMT+3)
                                            </label>
                                        </div>
                                        <div class="form-check text-right">
                                            <input class="form-check-input w-auto" type="radio" name="period" id="period5" value="period5">
                                            <label class="form-check-label mr-4" for="period5">
                                                الفترة المسائية 4 (2:00 - 5:00 ليلا بتوقيت مكة المكرمة GMT+3)
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group text-right">
                                        <label for="exampleFormControlTextarea1">ملاحظات:</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>

                                    <div class="form-group text-right">
                                        <div class="form-check text-right">
                                            <input class="form-check-input w-auto" type="checkbox" value="" id="invalidCheck" required>
                                            <label class="form-check-label mr-4" for="invalidCheck">
                                                أقر بصحة البيانات السابقة وبأنني اطلعت على كافة الشروط والأحكام وأتعهد بالاتزام بذلك.
                                            </label>
                                            <div class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            </form>

                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">معلومات الدفع:</h2>
                                    </div>
                                </div>

                                <label class="w-100 text-right" for="payment1">
                                    السداد عبر البطاقة الائتمانية--> إجمالي الرسوم الدراسية + البنكية = 310$ (1162 ريال)
                                </label>

                                <form id="payment-form" method="POST" action="https://merchant.com/charge-card">
                                    <div class="one-liner">
                                        <div class="card-frame"></div>
                                        <button id="pay-button" disabled>
                                            PAY GBP 24.99
                                        </button>
                                    </div>
                                    <p class="error-message"></p>
                                    <p class="success-payment-message"></p>
                                </form>

                            </div>
                            <button type="submit" class="btn btn-primary">ارسال</button>
                        </fieldset>
                    </div>


                </div>
            </div>
        </div>
    </div>
</body>

<!-- add frames script -->
<script src="https://cdn.checkout.com/js/framesv2.min.js"></script>
<script src="{{ asset('app.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>
