@extends('index')
<div class="h-svh w-full fixed">
    <div class="circle">
        <span class="large green"></span>
        <span class="small blue"></span>
        <span class="small orange"></span>
        <span class="large red"></span>
    </div>
    <div class="flex justify-center items-center w-full h-full">
        <div class="drop-shadow w-[30rem] h-[42rem] bg-[#FEF6EE]">
            <div class="p-4 pl-6">
                <div class="form-header flex gap-4 justify-center items-center py-4">
                    <span class="box"></span>
                    <div class="logo block space-y-0">
                        <h1 class="text-[33px] font-semibold">Eassilli</h1>
                        <h3 class="text-[20px] font-normal">Todo-App</h3>
                    </div>
                </div>
                <div class="txt py-4 px-6">
                    <h2 class="text-2xl font-bold mb-1">Login</h2>
                    <h4 class="text-lg font-normal">Login to continue</h4>
                </div>
                <form action="/create" method="POST" class="grid">
                    @csrf
                    <div class="personal justify-self-center">
                        <input class="custom input pl-6 pr-2" type="text" name="fullname" placeholder="Username or Email Address">
                    </div>
                    <div class="password input custom justify-self-center flex justify-center items-center pr-4">
                        <input class="w-full h-full pl-6 pr-2" type="password" name="password" placeholder="Password" id="password">
                        <input type="checkbox" name="trigger" class="trigger-hide relative" id="hide" hidden>
                        <i class="cursor-pointer fa-solid fa-eye-slash hide eye" onclick="document.getElementById('hide').checked = true; document.getElementById('reveal').checked=false; hide()"></i>
                        <input type="checkbox" name="trigger" class="trigger-reveal relative" id="reveal" hidden checked>
                        <i class="cursor-pointer fa-solid fa-eye reveal eye" onclick="document.getElementById('hide').checked = false; document.getElementById('reveal').checked=true; reveal()"></i>
                    </div>
                    <button class="submit w-[23.2rem] h-[3rem] justify-self-center mt-3 rounded-[10px] bg-[#2B2D40]" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- @push('scripts') --}}
<script>
    const password = document.getElementById("password");
    const submit = document.querySelector(".submit")
    submit.addEventListener('click', function(e) {
        // e.preventDefault()
        if(password.value.length < 6){
            document.getElementsByClassName('password').style.display == "none"
            console.log("6letters")
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
</script>
