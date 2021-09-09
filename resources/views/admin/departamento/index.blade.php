<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">            
            Lista Departamentos     
        </h2>
    </x-slot>

    <div class="py-12">
       <div class="container">
           <div class="row">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Extension</th>
                    <th scope="col">Created at</th>
                  </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    
                  <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td> </td>
                    <td></td>
                    <td></td>                   
                    
                  </tr>   
                  
                </tbody>
              </table>

           </div>          
       </div>
    </div>
</x-app-layout>
