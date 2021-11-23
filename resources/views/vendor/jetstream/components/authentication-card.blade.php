<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" 
{{-- style="background-image: url( {{url('/dist/img/bg-star.jpg')}}); " --}}
>
    <div class="page">
        <div class="contenedor">
            
            <div class="left">
                {{-- {{ $logo }} --}}
                <div class="login">Programa SAFCI</div>
                <div class="eula">Por favor anote su Usuario y contraseña para iniciar sesion</div>
            </div>
           <div class="right" >

            {{-- <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-800 shadow-md overflow-hidden ">  --}}
                {{ $slot }}
            {{-- </div> --}}
            </div>
    </div>
</div>
