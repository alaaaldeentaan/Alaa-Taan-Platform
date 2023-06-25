<x-app-layout>
    <x-slot name="header">
        <img src="{{  asset('images/member-01.jpg')}}"  alt="Avatar">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <pre> {{ __('Dashboard Student ') }}                              {{Auth::user()->user_name}}          </pre>
        </h2>
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <pre> {{ __('Your Email Student ') }}                             {{Auth::user()->email}}          </pre>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in! seccassafly") }}
                    <br>
                    {{ __("You're Student in the site") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
    /* تحديد النص */
.text-gray-800 {
    color: #333333;
  }

  /* تحديد خلفية الصفحة */
  body {
    background-color: #f5f5f5;
  }

  /* تحديد تخطيط الصفحة الرئيسي */
  .x-app-layout {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  /* تحديد حجم الصورة */
  .x-app-layout img {
    width: 200px;
    height: 200px;
  }

  /* تحديد نمط الخط */
  .font-semibold {
    font-weight: 600;
  }

  /* تحديد العنصر النصي*/
  .leading-tight {
    line-height: 1.25;
  }

  /* تحديد لون الخط والخلفية للعناصر */
  .bg-white {
    background-color: #ffffff;
  }

  .text-gray-900 {
    color: #222222;
  }

  /* تحديد هامش الصفحة */
  .py-12 {
    padding-top: 3rem;
    padding-bottom: 3rem;
  }

  /* تحديد حجم الصفحة */
  .max-w-7xl {
    max-width: 80rem;
  }

  /* تحديد الخطوط */
  pre {
    font-family: 'Courier New', Courier, monospace;
  }
</style>
