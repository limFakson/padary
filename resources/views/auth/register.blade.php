@extends('index')
<div>
    <div class="flex justify-center items-center w-full h-full">
        <div class="morpheme">
            <div class="w-[35rem] p-4 pl-6">
                <h2 class="text-center font-bold text-2xl">Holla, Welcome to Padary</h2>
                <form action="{{ route('reg') }}" method="post" class="grid">
                    <div class="personal justify-self-start">
                        <label for="fullname" class="text-lg font-semibold">Fullname:
                            <input type="text" name="fullname"></label> <br> <br>
                        <label for="email">Email:
                            <input type="email" name="email"></label> <br> <br>
                    </div>
                    <div class="password justify-self-start">
                        <label for="passeord">Password:
                            <input type="password" name="password"></label> <br> <br>
                        <label for="confirm_Password">Confirm Password:
                            <input type="password" name="confirm_Password"></label>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
