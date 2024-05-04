<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coadding Test</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            *{
                box-sizing: border-box;
            }

        </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #c8e3f5;">
        
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><svg data-v-5a15c7c8="" xmlns="http://www.w3.org/2000/svg"
                    width="167" height="47" viewBox="0 0 167 47" fill="none">
                    <g data-v-5a15c7c8="" clip-path="url(#clip0_1061_13125)">
                        <path data-v-5a15c7c8="" fill-rule="evenodd" clip-rule="evenodd"
                            d="M100.93 16.4337C103.938 13.5892 106.932 10.7278 109.96 7.90427C111.839 6.15238 113.792 4.4829 116.077 3.25836C117.452 2.52036 118.893 2.05756 120.448 2.54956C121.744 2.9589 121.818 3.3554 120.828 4.30691C113.95 10.9251 106.986 17.4475 99.3073 23.1528C99.0576 23.3384 98.8369 23.5657 98.6034 23.7753C96.513 24.9521 94.6415 26.5352 92.258 27.1668C89.6101 27.8683 87.7671 26.3309 88.0342 23.5932C88.1766 22.1286 88.5946 20.7219 89.0065 19.3126C89.2115 18.6144 89.6438 17.9247 89.3976 16.8406C88.7924 17.5132 88.3486 18.0186 87.892 18.5126C85.7913 20.786 83.6553 23.0289 81.1973 24.9234C79.999 25.8459 78.7218 26.9292 77.0798 25.9923C75.4206 25.0455 75.6325 23.3573 75.6867 21.7803C75.707 21.5717 75.7403 21.3646 75.7863 21.1602C76.1909 18.6726 76.9464 16.2748 77.6795 13.8729C78.3008 11.8383 78.9085 9.80086 79.5222 7.76433C79.3769 7.66173 79.2295 7.55931 79.0839 7.45655C77.727 8.89641 76.384 10.3501 75.01 11.7734C73.5554 13.279 72.2178 14.9243 70.4464 16.0841C67.9537 17.7156 65.6978 16.5259 65.5413 13.5435C65.4403 11.613 66.1187 9.83388 66.6032 8.01596C66.8861 6.95406 67.3972 5.93905 67.4007 4.77387C64.259 7.01472 61.1369 9.12526 58.4978 11.8378C55.6859 14.4967 52.8841 17.1662 50.0575 19.8096C47.9928 21.7405 45.8886 23.6264 43.3749 24.9786C42.005 25.7167 40.5638 26.1703 39.0123 25.692C37.7245 25.2949 37.6421 24.8699 38.6193 23.9314C45.4491 17.3686 52.3532 10.8881 59.9686 5.21925C60.3016 4.97169 60.5943 4.6704 60.9058 4.39399C62.9394 3.34249 64.6956 1.78479 66.9572 1.1434C69.8791 0.315207 71.7489 1.86529 71.3976 4.85627C71.1946 6.58338 70.6379 8.2202 70.1593 9.87842C70.0436 10.2823 69.8178 10.6864 70.0662 11.2646C72.7633 8.49834 75.1995 5.67581 78.1499 3.39743C79.3862 2.44212 80.69 1.27823 82.3846 2.25668C84.0926 3.24354 83.8139 5.00739 83.7531 6.62905C83.7458 6.83518 83.6702 7.03898 83.6351 7.24521C83.2265 9.67722 82.4892 12.0212 81.7742 14.3733C81.1558 16.408 80.542 18.444 79.9326 20.4813C80.0685 20.574 80.204 20.6666 80.339 20.7592C81.8128 19.217 83.2771 17.6653 84.763 16.1342C86.0379 14.8197 87.2272 13.4068 88.7297 12.3363C89.7778 11.59 90.9624 10.9991 92.2391 11.6571C93.537 12.3265 93.8906 13.5943 93.9199 14.9787C93.9452 16.147 93.6466 17.2522 93.373 18.3736C92.9593 20.0661 92.2174 21.6777 92.005 23.5345C95.1473 21.2212 98.2923 19.1461 100.93 16.4337Z"
                            fill="url(#paint0_linear_1061_13125)"></path>
                        <path data-v-5a15c7c8=""
                            d="M3.94743 41.0581L10.818 44.0667C11.7142 44.4508 11.8211 44.9204 11.8211 45.4109C11.8211 46.0938 11.3302 46.5635 10.6474 46.5635C10.3485 46.5635 10.0075 46.5209 9.47401 46.2647L0.78925 42.2745C0.554262 42.1697 0.354669 41.9991 0.214604 41.7832C0.0745388 41.5674 0 41.3156 0 41.0583C0 40.801 0.0745388 40.5492 0.214604 40.3334C0.354669 40.1175 0.554262 39.9469 0.78925 39.8421L9.47401 35.8517C10.0075 35.5959 10.3485 35.5527 10.6474 35.5527C11.3302 35.5527 11.8211 36.0223 11.8211 36.7051C11.8211 37.1961 11.7142 37.6652 10.818 38.0494L3.94743 41.0581Z"
                            fill="#00A88E"></path>
                        <path data-v-5a15c7c8=""
                            d="M28.1027 40.5353C28.1027 39.1486 27.6332 38.6576 26.6518 38.6576C25.905 38.6576 25.1792 39.4259 25.1792 40.6635V44.7391C25.1792 46.2326 24.2616 46.9154 22.9815 46.9154C21.7011 46.9154 20.7834 46.2326 20.7834 44.7391V40.5353C20.7834 39.1486 20.3144 38.6576 19.3325 38.6576C18.5857 38.6576 17.8604 39.4259 17.8604 40.6635V44.7391C17.8604 46.2326 16.943 46.9154 15.6627 46.9154C14.3823 46.9154 13.4648 46.2326 13.4648 44.7391V37.292C13.4648 35.9265 14.1261 35.2012 15.5773 35.2012C16.879 35.2012 17.3909 35.9477 17.5402 37.2705H17.5833C18.3086 35.9477 19.5249 35.2012 21.2105 35.2012C22.6401 35.2012 24.1338 35.8408 24.5178 37.356C25.4568 35.7984 26.6731 35.2012 28.2307 35.2012C31.2606 35.2012 32.4983 37.0786 32.4983 39.5111V44.7391C32.4983 46.2326 31.5808 46.9154 30.3006 46.9154C29.0204 46.9154 28.1027 46.2326 28.1027 44.7391V40.5353Z"
                            fill="#0061AF"></path>
                        <path data-v-5a15c7c8=""
                            d="M40.7558 46.9154C37.2561 46.9154 34.5039 45.1015 34.5039 41.0476C34.5039 37.0147 37.2561 35.2012 40.7558 35.2012C45.6637 35.2012 47.1574 38.5721 47.1574 40.2366C47.1574 41.5596 46.5382 42.0292 45.1302 42.0292H38.8995C39.0059 43.4374 39.8172 44.3549 41.2466 44.3549C42.8471 44.3549 43.7857 42.9892 45.1302 42.9892C45.8986 42.9892 46.4959 43.7361 46.4959 44.4402C46.4959 45.6564 45.002 46.9154 40.7558 46.9154ZM43.0177 39.8525C43.0177 38.3163 42.0574 37.7614 40.9695 37.7614C39.9874 37.7614 38.9635 38.2951 38.8995 39.8525H43.0177Z"
                            fill="#0061AF"></path>
                        <path data-v-5a15c7c8=""
                            d="M56.7162 33.1958C56.7162 31.6806 57.4847 30.998 58.8503 30.998C60.2159 30.998 60.984 31.6806 60.984 33.1958V44.7822C60.984 46.1907 60.3437 46.916 59.0211 46.916C57.7617 46.916 57.1004 46.0413 57.1004 44.9106H57.0579C56.6954 46.3186 54.9666 46.916 53.7079 46.916C50.6348 46.916 48.7148 44.6328 48.7148 41.027C48.7148 38.8716 49.9096 35.2018 53.5799 35.2018C55.0306 35.2018 56.0334 35.8846 56.6738 36.9084H56.7162V33.1958ZM55.0948 38.6583C53.5799 38.6583 53.1104 39.8959 53.1104 41.1762C53.1104 42.3711 53.5154 43.7155 55.0095 43.7155C56.2683 43.7155 56.7802 42.6488 56.7802 41.0694C56.7802 39.5117 56.055 38.6583 55.0948 38.6583Z"
                            fill="#0061AF"></path>
                        <path data-v-5a15c7c8=""
                            d="M63.2266 37.3768C63.2266 35.8835 64.1443 35.2007 65.4244 35.2007C66.7047 35.2007 67.6222 35.8835 67.6222 37.3768V44.7386C67.6222 46.2321 66.7047 46.9149 65.4244 46.9149C64.1443 46.9149 63.2266 46.2321 63.2266 44.7386V37.3768ZM65.4244 30.25C65.8337 30.25 66.2339 30.3715 66.5742 30.5989C66.9146 30.8263 67.1799 31.1496 67.3365 31.5278C67.4931 31.906 67.5341 32.3221 67.4542 32.7236C67.3744 33.1251 67.1772 33.4938 66.8878 33.7833C66.5983 34.0727 66.2295 34.2699 65.8281 34.3497C65.4266 34.4296 65.0104 34.3886 64.6322 34.2319C64.2541 34.0753 63.9308 33.81 63.7034 33.4696C63.476 33.1293 63.3546 32.7291 63.3546 32.3197C63.3531 32.0475 63.4056 31.7777 63.5091 31.5259C63.6126 31.2741 63.765 31.0453 63.9575 30.8529C64.15 30.6604 64.3787 30.508 64.6305 30.4045C64.8823 30.301 65.1522 30.2485 65.4244 30.25Z"
                            fill="#0061AF"></path>
                        <path data-v-5a15c7c8=""
                            d="M77.5021 37.3773C77.5021 35.884 78.4198 35.2012 79.6999 35.2012C80.9802 35.2012 81.8977 35.884 81.8977 37.3773V44.8244C81.8977 46.19 81.2364 46.9154 79.7854 46.9154C78.4835 46.9154 77.9716 46.1686 77.8223 44.846H77.7794C77.0541 46.1686 75.8378 46.9154 74.1519 46.9154C71.1005 46.9154 69.8633 45.0378 69.8633 42.605V37.3773C69.8633 35.884 70.7807 35.2012 72.0611 35.2012C73.3414 35.2012 74.2589 35.884 74.2589 37.3773V41.5812C74.2589 42.7975 74.7924 43.4587 75.8803 43.4587C76.9686 43.4587 77.5021 42.605 77.5021 41.2826V37.3773Z"
                            fill="#0061AF"></path>
                        <path data-v-5a15c7c8=""
                            d="M89.0681 42.5837L87.7664 42.3064C84.5656 41.6236 83.6268 40.4712 83.6268 38.8283C83.6268 37.1211 84.8642 35.2012 89.2598 35.2012C91.8631 35.2012 94.5731 35.9265 94.5731 37.6334C94.5731 38.4018 93.9756 38.9991 93.122 38.9991C91.6714 38.9991 91.223 37.6334 89.1318 37.6334C88.3423 37.6334 87.8941 37.9109 87.8941 38.4229C87.8941 38.8499 88.0866 39.0632 89.2598 39.3189L91.1165 39.7244C93.5275 40.2579 95.021 41.261 95.021 43.0533C95.021 44.9953 93.57 46.9154 88.9612 46.9154C86.1234 46.9154 83.6055 46.0622 83.6055 44.2057C83.6055 43.4803 84.3096 42.8614 85.1629 42.8614C86.4008 42.8614 86.998 44.4829 89.1105 44.4829C90.0495 44.4829 90.4974 44.0346 90.4974 43.6081C90.4974 43.2241 90.2844 42.84 89.0681 42.5837Z"
                            fill="#0061AF"></path>
                        <path data-v-5a15c7c8=""
                            d="M96.1316 37.8034C95.9975 37.4339 95.9253 37.0448 95.918 36.6517C95.918 35.8403 96.6437 35.2007 97.4329 35.2007C98.5852 35.2007 98.7561 35.8194 98.9694 36.7156L100.612 43.5437H100.655L101.978 37.3344C102.234 36.1181 102.49 35.1574 103.941 35.2007C105.413 35.1574 105.712 36.0964 105.99 37.3344L107.334 43.5437H107.377L108.913 36.7156C109.105 35.8194 109.297 35.2007 110.449 35.2007C111.239 35.2007 111.964 35.8403 111.964 36.6517C111.957 37.0447 111.885 37.4338 111.751 37.8034L109.468 45.2295C109.02 46.7015 108.678 46.9149 107.441 46.9149C106.139 46.9149 105.819 46.5308 105.499 45.2934L103.962 39.1691H103.92L102.384 45.2934C102.063 46.5308 101.744 46.9149 100.442 46.9149C99.204 46.9149 98.863 46.7015 98.4145 45.2295L96.1316 37.8034Z"
                            fill="#0061AF"></path>
                        <path data-v-5a15c7c8=""
                            d="M123.829 43.6295C123.829 44.9314 124.149 45.23 124.149 45.7205C124.149 46.4249 123.488 46.9154 122.741 46.9154C121.397 46.9154 120.948 46.0622 120.906 45.1015C119.69 46.4463 118.281 46.9154 116.638 46.9154C114.867 46.9154 113.117 45.6991 113.117 43.7361C113.117 41.154 115.081 40.4289 117.47 40.1511L119.37 39.9377C120.116 39.8525 120.713 39.682 120.713 38.7854C120.713 37.8893 119.796 37.5053 118.751 37.5053C116.446 37.5053 116.382 39.2125 115.145 39.2125C114.355 39.2125 113.821 38.6576 113.821 38.0176C113.821 36.7798 115.571 35.2012 118.772 35.2012C121.76 35.2012 123.829 36.1611 123.829 38.4018V43.6295ZM120.713 41.3889C120.372 41.7091 119.732 41.8159 119.37 41.8797L118.239 42.0502C116.937 42.2425 116.233 42.6481 116.233 43.5867C116.233 44.291 116.894 44.8669 117.961 44.8669C119.668 44.8669 120.713 43.7574 120.713 42.605V41.3889Z"
                            fill="#0061AF"></path>
                        <path data-v-5a15c7c8=""
                            d="M126.688 36.6522C126.688 35.7132 127.307 35.2012 128.096 35.2012C128.886 35.2012 129.504 35.7132 129.504 36.6522V37.8468H129.547C129.91 36.5453 130.614 35.2012 132.129 35.2012C133.111 35.2012 133.836 35.8408 133.836 36.7161C133.836 37.8684 133.068 38.2734 132.3 38.2734H131.745C130.486 38.2734 129.803 39.1486 129.803 41.7305V45.358C129.803 46.19 129.462 46.9154 128.246 46.9154C127.029 46.9154 126.688 46.19 126.688 45.358V36.6522Z"
                            fill="#0061AF"></path>
                        <path data-v-5a15c7c8=""
                            d="M137.592 41.6452C137.592 43.2879 138.659 44.4829 140.473 44.4829C142.82 44.4829 142.82 42.9467 144.079 42.9467C144.825 42.9467 145.359 43.5867 145.359 44.1632C145.359 46.0407 142.35 46.9154 140.473 46.9154C136.119 46.9154 134.477 43.9708 134.477 41.261C134.477 37.6334 136.674 35.2012 140.366 35.2012C143.951 35.2012 145.999 37.74 145.999 40.3009C145.999 41.3674 145.679 41.6452 144.633 41.6452H137.592ZM143.055 39.8525C142.884 38.4229 141.817 37.3773 140.43 37.3773C138.872 37.3773 137.933 38.3376 137.592 39.8525H143.055Z"
                            fill="#0061AF"></path>
                        <path data-v-5a15c7c8=""
                            d="M152.21 31.7874C152.338 31.4457 152.552 30.9121 153.384 30.9121C153.874 30.9121 154.493 31.3179 154.493 32.0007C154.493 32.2353 154.408 32.4702 154.322 32.7047L149.223 46.1263C149.094 46.4677 148.881 47.0013 148.049 47.0013C147.558 47.0013 146.939 46.5958 146.939 45.913C146.939 45.6784 147.025 45.4435 147.11 45.209L152.21 31.7874Z"
                            fill="#9A258F"></path>
                        <path data-v-5a15c7c8=""
                            d="M163.028 41.0581L156.157 38.0494C155.261 37.6652 155.154 37.1961 155.154 36.7051C155.154 36.0223 155.645 35.5527 156.327 35.5527C156.626 35.5527 156.968 35.5959 157.501 35.8517L166.186 39.8421C166.421 39.9468 166.62 40.1174 166.76 40.3333C166.901 40.5491 166.975 40.801 166.975 41.0583C166.975 41.3157 166.901 41.5675 166.76 41.7833C166.62 41.9992 166.421 42.1698 166.186 42.2745L157.501 46.2647C156.968 46.5209 156.626 46.5635 156.327 46.5635C155.645 46.5635 155.154 46.0938 155.154 45.4109C155.154 44.9204 155.261 44.4508 156.157 44.0667L163.028 41.0581Z"
                            fill="#00A88E"></path>
                    </g>
                    <defs data-v-5a15c7c8="">
                        <linearGradient data-v-5a15c7c8="" id="paint0_linear_1061_13125" x1="37.957" y1="14.1289"
                            x2="121.503" y2="14.1289" gradientUnits="userSpaceOnUse">
                            <stop data-v-5a15c7c8="" stop-color="#006EB9"></stop>
                            <stop data-v-5a15c7c8="" offset="1" stop-color="#00A99D"></stop>
                        </linearGradient>
                        <clipPath data-v-5a15c7c8="" id="clip0_1061_13125">
                            <rect data-v-5a15c7c8="" width="166.976" height="46.08" fill="white"
                                transform="translate(0 0.921875)"></rect>
                        </clipPath>
                    </defs>
                </svg></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Transactions
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{url('/transaction')}}">Transactions List</a></li>
                            
                            <li><a class="dropdown-item" href="{{url('/deposit')}}">Deposite List</a></li>
                            <li><a class="dropdown-item" href="{{url('/create_deposit')}}">Add Deposite Amonut</a></li>

                            <li><a class="dropdown-item" href="{{url('/withdrawal')}}">Withdrawal List</a></li>
                            <li><a class="dropdown-item" href="{{url('/create_withdrawal')}}">Add Withdrawal Amonut</a></li>
                            
                        </ul>
                    </li>

                </ul>

            </div>
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
