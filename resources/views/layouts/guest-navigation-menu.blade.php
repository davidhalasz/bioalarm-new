<header
x-data="
  {
    navbarOpen: false,
  }
"
class="bg-blue-500 w-full"
>
<div class="container mx-auto">
  <div class="flex -mx-4 items-center justify-between relative">
    <div class="px-4 w-60 max-w-full">
      <a href="javascript:void(0)" class="w-full block py-5 lg:py-3">
        <img
          src="https://cdn.tailgrids.com/1.0/assets/images/logo/logo.svg"
          alt="logo"
          class="w-full"
        />
      </a>
    </div>
    <div class="flex px-4 justify-between items-center w-full">
      <div class="w-full">
        <button
          @click="navbarOpen = !navbarOpen"
          :class="navbarOpen && 'navbarTogglerActive' "
          id="navbarToggler"
          class="
            block
            absolute
            right-4
            top-1/2
            -translate-y-1/2
            lg:hidden
            focus:ring-2
            ring-hite
            px-3
            py-[6px]
            rounded-lg
          "
        >
          <span
            class="relative w-[30px] h-[2px] my-[6px] block bg-white"
          ></span>
          <span
            class="relative w-[30px] h-[2px] my-[6px] block bg-white"
          ></span>
          <span
            class="relative w-[30px] h-[2px] my-[6px] block bg-white"
          ></span>
        </button>
        <nav
          :class="!navbarOpen && 'hidden' "
          id="navbarCollapse"
          class="
            absolute
            py-5
            lg:py-0
            px-6
            bg-white
            lg:bg-transparent
            shadow
            rounded-lg
            max-w-[250px]
            z-50
            w-full
            lg:max-w-full lg:w-full
            right-4
            top-full
            justify-end
            lg:flex lg:static lg:shadow-none
          "
        >
          <ul class="blcok lg:flex">
            <li>
              <a onclick="scrollTo('rolunk')" href="#rolunk"
               
                class="
                  text-lg
                  font-medium
                  text-black
                  lg:text-white
                  hover:underline
                  py-2
                  lg:py-6 lg:inline-flex
                  flex
                  lg:mx-6
                "
              >
                Rólunk
              </a>
            </li>
            <li>
              <a
              onclick="scrollTo('projekt')" href="#projekt"
                class="
                  text-lg
                  font-medium
                  text-black
                  lg:text-white
                  hover:underline
                  py-2
                  lg:py-6 lg:inline-flex
                  flex
                  lg:mx-6
                "
              >
                Projekt
              </a>
            </li>
            <li>
              <a
              onclick="scrollTo('partnerek')" href="#partnerek"
                class="
                  text-lg
                  font-medium
                  text-black
                  lg:text-white
                  hover:underline
                  py-2
                  lg:py-6 lg:inline-flex
                  flex
                  lg:mx-6
                "
              >
                Partnerek
              </a>
            </li>
            <li>
              <a
              onclick="scrollTo('hirek-esemenyek')" href="#hirek-esemenyek"
                class="
                  text-lg
                  font-medium
                  text-black
                  lg:text-white
                  hover:underline
                  py-2
                  lg:py-6 lg:inline-flex
                  flex
                  lg:mx-6
                "
              >
                Hírek, Események
              </a>
            </li>
            <li>
              <a
              onclick="scrollTo('galeria')" href="#galeria"
                class="
                  text-lg
                  font-medium
                  text-black
                  lg:text-white
                  hover:underline
                  py-2
                  lg:py-6 lg:inline-flex
                  flex
                  lg:mx-6
                "
              >
                Galéria
              </a>
            </li>
            <li>
                <a
                onclick="scrollTo('kapcsolat')" href="#kapcsolat"
                  class="
                    text-lg
                    font-medium
                    text-black
                    lg:text-white
                    hover:underline
                    py-2
                    lg:py-6 lg:inline-flex
                    flex
                    lg:mx-6
                  "
                >
                  Kapcsolat
                </a>
              </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
</header>