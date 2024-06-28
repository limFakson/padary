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
                <form action="/reg" method="GET" class="grid">
                    <div class="personal justify-self-center">
                        <input class="custom input pl-6 pr-2" type="text" name="fullname" placeholder="Username or Email Address">
                    </div>
                    <div class="password input custom justify-self-center flex justify-center items-center pr-4">
                        <input class="w-full h-full pl-6 pr-2" type="password" name="password" placeholder="Password">
                        <input type="checkbox" name="trigger" class="trigger">
                        <i class="cursor-pointer fa-solid fa-eye-slash hide"></i>
                        <i class="cursor-pointer fa-solid fa-eye reveal"></i>
                    </div>
                    <button class="submit w-[23.2rem] h-[3rem] justify-self-center mt-3 rounded-[10px] bg-[#2B2D40]" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
