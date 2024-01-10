import React, { useState } from 'react';

const Login = () => {
    return (
        <form className={'h-[100svh] text-blue-700 bg-gray-100 w-[420px] mx-auto p-5'} action="">
            <h1 className={'text-center text-2xl mb-8'}>ورود</h1>
            <input id={'username'} name={'username'} className={'w-full px-3 py-1 my-5 rounded-[8px]'} type="text" placeholder='نام کاربری'/>
            <input id={'password'} name={'password'} className={'w-full px-3 py-1 my-5 rounded-[8px]'} type="password" placeholder='رمز عبور'/>
            <br/>
            <input className={'bg-blue-700 text-white py-3 px-2 my-5 rounded-2xl w-full'} type="submit" value="ورود"/>
        </form>
    )
}

export default Login
