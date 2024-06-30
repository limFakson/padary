@extends('index')
<div class="h-svh w-full fixed">
    <div class="circle">
        <span class="large green"></span>
        <span class="small blue"></span>
        <span class="small orange"></span>
        <span class="large red"></span>
    </div>
    <div class="message center top-4 relative">
        @if(session('message'))
            <div id="alert-message" class="alert bg-[#9ed2a0] border-[#4CAF50] border text-center align-middle content-center w-[33rem] h-10 alert-success text-lg text-[#1d3a1e]">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="flex justify-center items-center w-full h-full">
        <div class="drop-shadow w-[30rem] extend h-[44rem] bg-[#FEF6EE]">
            <div class="p-4 pl-6">
                <div class="form-header flex gap-4 justify-center items-center py-2">
                    <span class="box"></span>
                    <div class="logo block space-y-0">
                        <h1 class="text-[33px] font-semibold">Eassilli</h1>
                        <h3 class="text-[20px] font-normal">Todo-App</h3>
                    </div>
                </div>
                <div class="txt py-1 px-6">
                    <h2 class="text-2xl font-bold mb-1">Create Account</h2>
                    <h4 class="text-lg font-normal">Dreams written become goals</h4>
                </div>
                <form action="/create" method="POST" class="grid">
                    @csrf
                    <div class="personal justify-self-center flex flex-col">
                        <input class="custom input pl-6 pr-2" type="text" name="username" placeholder="Username" required>
                        <input class="custom input pl-6 pr-2" type="email" name="email" placeholder="Email Address" @required(true)>
                    </div>
                    <div class="password input custom justify-self-center flex justify-center items-center pr-4">
                        <input class="w-full h-full pl-6 pr-2" type="password" name="password" placeholder="Password" id="password" required>
                        <input type="checkbox" name="trigger" class="trigger-hide relative" id="hide" hidden>
                        <i class="cursor-pointer fa-solid fa-eye-slash hide eye" onclick="document.getElementById('hide').checked = true; document.getElementById('reveal').checked=false; hide()"></i>
                        <input type="checkbox" name="trigger" class="trigger-reveal relative" id="reveal" hidden checked>
                        <i class="cursor-pointer fa-solid fa-eye reveal eye" onclick="document.getElementById('hide').checked = false; document.getElementById('reveal').checked=true; reveal()"></i>
                    </div>
                    <div class="agree w-[23rem] justify-self-center gap-2 flex items-center justify-center mx-3">
                        <input type="checkbox" name="agree" id="agreement" class="text-[#2B2D40] cursor-pointer w-6 h-4" @required(true)>
                        <p class="mt-4">i agree to the <a href="/terms" class="a">terms of conditions</a> and <a href="/privacy" class="a">Privacy Policy</a></p>
                    </div>
                    <p class="text-red-500 justify-self-center text-sm w-[23rem] pt-2 py-2" id="error"></p>
                    <button class="submit w-[23.2rem] h-[3rem] justify-self-center mt-3 rounded-[10px] bg-[#2B2D40]" type="submit">Register</button>
                </form>
                <div class="oauth txt">
                    <div class="flex gap-2 justify-center items-center">
                        <hr class="w-[8rem] border border-[#2B2D40]">
                        <p>OR</p> <hr class="w-[8rem] border border-[#2B2D40]">
                    </div>
                    <div class="oauthButton flex m-4 gap-6 items-center justify-center">
                        <div class="googleButton obutton" role="button" id="">
                            <img src={{ url('image/googleImg.png', []) }} alt="">
                        </div>
                        <div class="appleButton obutton" role="button" id="">
                            <img src={{ url('image/appleImg.png', []) }} alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @push('scripts') --}}
<script>
    const submitBtn = document.querySelector(".submit")

    document.getElementById('password').addEventListener('focusout', function() {
        const password = this.value;
        const errorMessage = document.getElementById('error');
        const passwordField = document.querySelector('.password');

        // Regular expression to check for at least one uppercase letter, one number, and one special character
        const strongPasswordRegex = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/;

        if (password.length < 6) {
            errorMessage.textContent = "Password must be at least 6 characters.";
            passwordField.style.border = "1px solid red";
            submitBtn.disabled = true;
        } else if (!strongPasswordRegex.test(password)) {
            errorMessage.textContent = "Password must contain at least one uppercase letter, one number, and one special character.";
            passwordField.style.border = "1px solid red";
            document.querySelector('.extend').style.height = "45rem"
        submitBtn.disabled = true;
        } else {
            errorMessage.textContent = "";
            passwordField.style.border = "";
            submitBtn.disabled = false;
        }
    });

    function hide(){
        if (document.getElementById("hide").checked === true) {
            password.type = "text";
        }
    }
    function reveal(){
        if (document.getElementById("hide").checked === false) {
            password.type = "password";
        }
    }

    setTimeout(() => {
        const alert = document.getElementById('alert-message');
        if (alert) {
            alert.style.transition = "ease-in-out 3000s"
            alert.style.display = 'none';
        }
    }, 1500);
</script>

