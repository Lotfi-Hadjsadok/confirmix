<div x-data="{ open: false }" :class="open ? 'w-[250px]' : 'w-14'"
    class="fixed top-0 left-0 flex flex-col items-center h-screen py-4 transition-[width] border-r text-gray-50 dark:bg-neutral-800 dark:border-neutral-700">
    <button @click="open=!open">
        <svg class="p-2 text-white rounded-full shrink-0 bg-primary size-8 " viewBox="0 0 24 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path d="M5 12H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                <path d="M5 17H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                <path d="M5 7H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
            </g>
        </svg>
    </button>
    <ul x-data class="flex flex-col gap-5 mt-32 *:cursor-pointer ">

        <a href="{{ route('employee-to-confirm') }}" wire:navigate>
            <li :class="open && 'px-4'"
                class="flex hover:bg-primary/30 items-center justify-center gap-2 p-2 text-center text-white rounded-full shadow {{ request()->route()->named('employee-to-confirm') || request()->is('/') ? 'bg-primary/30' : 'bg-primary' }} ">
                <svg class="shrink-0 size-6" viewBox="0 0 1024 1024" class="icon" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M859.4 365.7c-8.9 0-17.5 1.3-25.7 3.7-32-148.2-164.1-259.7-321.7-259.7S222.2 221.2 190.3 369.4c-8.2-2.4-16.8-3.7-25.7-3.7-50.4 0-91.4 41-91.4 91.4v109.7c0 50.4 41 91.4 91.4 91.4s91.4-41 91.4-91.4V438.8c0-141.2 114.8-256 256-256s256 114.8 256 256v109.7c0 92.1-48.9 175.4-127.1 221-16.6-23.1-43.7-38.1-74.2-38.1H457c-50.4 0-91.4 41-91.4 91.4 0 50.4 41 91.4 91.4 91.4h109.7c42.9 0 79-29.8 88.8-69.7 81.6-39.6 141.8-109.7 169.2-193.1 10.7 4.4 22.4 6.8 34.7 6.8 50.4 0 91.4-41 91.4-91.4V457.1c0.1-50.4-41-91.4-91.4-91.4zM182.9 566.9c0 10.1-8.2 18.3-18.3 18.3s-18.3-8.2-18.3-18.3V457.1c0-10.1 8.2-18.3 18.3-18.3s18.3 8.2 18.3 18.3v109.8z m383.8 274.3H457c-10.1 0-18.3-8.2-18.3-18.3 0-10.1 8.2-18.3 18.3-18.3h109.7c10.1 0 18.3 8.2 18.3 18.3 0 10.1-8.2 18.3-18.3 18.3z m311-274.3c0 10.1-8.2 18.3-18.3 18.3s-18.3-8.2-18.3-18.3V457.2c0-10.1 8.2-18.3 18.3-18.3s18.3 8.2 18.3 18.3v109.7z"
                            fill="#ffffff"></path>
                        <path
                            d="M512 658.3c80.7 0 146.3-65.6 146.3-146.3h-73.1c0 40.3-32.8 73.1-73.1 73.1S439 552.3 439 512h-73.1c-0.2 80.7 65.4 146.3 146.1 146.3z"
                            fill="#ffffff"></path>
                    </g>
                </svg>
                <span :class="open ? 'block' : 'hidden'" class="text-nowrap">Pending Orders</span>
            </li>
        </a>

        <a href="{{ route('employee-confirmed') }}" wire:navigate>
            <li :class="open && 'px-4'"
                class="flex hover:bg-primary/30 items-center justify-center gap-2 p-2 text-white rounded-full shadow {{ request()->route()->named('employee-confirmed') ? 'bg-primary/30' : 'bg-primary' }}">
                <svg class="size-6" viewBox="0 0 1024 1024" fill="#ffffff" class="icon" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M824.8 1003.2H203.2c-12.8 0-25.6-2.4-37.6-7.2-11.2-4.8-21.6-12-30.4-20.8-8.8-8.8-16-19.2-20.8-30.4-4.8-12-7.2-24-7.2-37.6V260c0-12.8 2.4-25.6 7.2-37.6 4.8-11.2 12-21.6 20.8-30.4 8.8-8.8 19.2-16 30.4-20.8 12-4.8 24-7.2 37.6-7.2h94.4v48H203.2c-26.4 0-48 21.6-48 48v647.2c0 26.4 21.6 48 48 48h621.6c26.4 0 48-21.6 48-48V260c0-26.4-21.6-48-48-48H730.4v-48H824c12.8 0 25.6 2.4 37.6 7.2 11.2 4.8 21.6 12 30.4 20.8 8.8 8.8 16 19.2 20.8 30.4 4.8 12 7.2 24 7.2 37.6v647.2c0 12.8-2.4 25.6-7.2 37.6-4.8 11.2-12 21.6-20.8 30.4-8.8 8.8-19.2 16-30.4 20.8-11.2 4.8-24 7.2-36.8 7.2z"
                            fill=""></path>
                        <path
                            d="M752.8 308H274.4V152.8c0-32.8 26.4-60 60-60h61.6c22.4-44 67.2-72.8 117.6-72.8 50.4 0 95.2 28.8 117.6 72.8h61.6c32.8 0 60 26.4 60 60v155.2m-430.4-48h382.4V152.8c0-6.4-5.6-12-12-12H598.4l-5.6-16c-12-33.6-43.2-56-79.2-56s-67.2 22.4-79.2 56l-5.6 16H334.4c-6.4 0-12 5.6-12 12v107.2zM432.8 792c-6.4 0-12-2.4-16.8-7.2L252.8 621.6c-4.8-4.8-7.2-10.4-7.2-16.8s2.4-12 7.2-16.8c4.8-4.8 10.4-7.2 16.8-7.2s12 2.4 16.8 7.2L418.4 720c4 4 8.8 5.6 13.6 5.6s10.4-1.6 13.6-5.6l295.2-295.2c4.8-4.8 10.4-7.2 16.8-7.2s12 2.4 16.8 7.2c9.6 9.6 9.6 24 0 33.6L449.6 784.8c-4.8 4-11.2 7.2-16.8 7.2z"
                            fill=""></path>
                    </g>
                </svg>
                <span :class="open ? 'block' : 'hidden'" class="text-nowrap">Confirmed Orders</span>
            </li>
        </a>

        <a href="{{ route('employee-failed') }}" wire:navigate>
            <li :class="open && 'px-4'"
                class="flex items-center  hover:bg-primary/30 justify-center gap-2 p-2 text-white rounded-full shadow {{ request()->route()->named('employee-failed') ? 'bg-primary/30' : 'bg-primary' }}">
                <svg class="size-6" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 7.5C0 3.35786 3.35786 0 7.5 0C11.6421 0 15 3.35786 15 7.5C15 11.6421 11.6421 15 7.5 15C3.35786 15 0 11.6421 0 7.5ZM2.56379 3.27089C1.58895 4.40766 1 5.88505 1 7.5C1 11.0899 3.91015 14 7.5 14C9.11495 14 10.5923 13.411 11.7291 12.4362L2.56379 3.27089ZM3.27089 2.56379L12.4362 11.7291C13.411 10.5923 14 9.11495 14 7.5C14 3.91015 11.0899 1 7.5 1C5.88505 1 4.40766 1.58895 3.27089 2.56379Z"
                            fill="#ffffff"></path>
                    </g>
                </svg>
                <span :class="open ? 'block' : 'hidden'" class="text-nowrap">Failed Orders</span>
            </li>
        </a>
        <a href="{{ route('employee-settings') }}" wire:navigate>
            <li :class="open && 'px-4'"
                class="flex items-center  hover:bg-primary/30 justify-center gap-2 p-2 text-white rounded-full shadow {{ request()->route()->named('employee-settings') ? 'bg-primary/30' : 'bg-primary' }}">
                <svg class="size-6" viewBox="0 0 600 600" version="1.1" id="svg9724" sodipodi:docname="settings2.svg"
                    inkscape:version="1.2.2 (1:1.2.2+202212051550+b0a8486541)"
                    xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                    xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                    xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" fill="#ffffff"
                    stroke="#ffffff">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <defs id="defs9728"></defs>
                        <sodipodi:namedview id="namedview9726" pagecolor="#ffffff" bordercolor="#ffffff"
                            borderopacity="1.0" inkscape:showpageshadow="2" inkscape:pageopacity="0.0"
                            inkscape:pagecheckerboard="0" inkscape:deskcolor="#ffffff" showgrid="true"
                            inkscape:zoom="0.59480855" inkscape:cx="44.55215" inkscape:cy="332.03961"
                            inkscape:window-width="1920" inkscape:window-height="1009" inkscape:window-x="0"
                            inkscape:window-y="1080" inkscape:window-maximized="1" inkscape:current-layer="svg9724"
                            showguides="true">
                            <inkscape:grid type="xygrid" id="grid9972" originx="0" originy="0">
                            </inkscape:grid>
                            <sodipodi:guide position="40,400" orientation="0,-1" id="guide292"
                                inkscape:locked="false"></sodipodi:guide>
                            <sodipodi:guide position="90,200" orientation="0,-1" id="guide294"
                                inkscape:locked="false"></sodipodi:guide>
                            <sodipodi:guide position="230,500" orientation="0,-1" id="guide296"
                                inkscape:locked="false"></sodipodi:guide>
                            <sodipodi:guide position="210,300" orientation="0,-1" id="guide298"
                                inkscape:locked="false"></sodipodi:guide>
                            <sodipodi:guide position="230,100" orientation="0,-1" id="guide300"
                                inkscape:locked="false"></sodipodi:guide>
                        </sodipodi:namedview>
                        <g id="g10449" transform="matrix(0.95173205,0,0,0.95115787,13.901174,12.168794)"
                            style="stroke-width:1.05103">
                            <path id="path356"
                                style="color:#ffffff;fill:#ffffff;stroke-linecap:round;-inkscape-stroke:none"
                                d="M 447.70881 -12.781343 A 42.041451 42.041451 0 0 0 405.66786 29.260344 L 405.66786 50.301721 L 27.434765 50.301721 A 42.041302 42.041302 0 0 0 -14.606185 92.341354 A 42.041302 42.041302 0 0 0 27.434765 134.38304 L 405.66786 134.38304 L 405.66786 155.44906 A 42.041451 42.041451 0 0 0 447.70881 197.49075 A 42.041451 42.041451 0 0 0 489.74976 155.44906 L 489.74976 134.38304 L 573.78036 134.38304 A 42.041302 42.041302 0 0 0 615.82336 92.341354 A 42.041302 42.041302 0 0 0 573.78036 50.301721 L 489.74976 50.301721 L 489.74976 29.260344 A 42.041451 42.041451 0 0 0 447.70881 -12.781343 z M 143.0012 197.48869 A 42.041451 42.041451 0 0 0 100.9582 239.53038 L 100.9582 260.5697 L 27.447078 260.5697 A 42.041302 42.041302 0 0 0 -14.593872 302.61139 A 42.041302 42.041302 0 0 0 27.447078 344.65308 L 100.9582 344.65308 L 100.9582 365.7191 A 42.041451 42.041451 0 0 0 143.0012 407.76078 A 42.041451 42.041451 0 0 0 185.04215 365.7191 L 185.04215 344.65308 L 573.79472 344.65308 A 42.041302 42.041302 0 0 0 615.83567 302.61139 A 42.041302 42.041302 0 0 0 573.79472 260.5697 L 185.04215 260.5697 L 185.04215 239.53038 A 42.041451 42.041451 0 0 0 143.0012 197.48869 z M 279.59427 407.76078 A 42.041451 42.041451 0 0 0 237.55332 449.80042 L 237.55332 470.83974 L 27.447078 470.83974 A 42.041302 42.041302 0 0 0 -14.593872 512.88143 A 42.041302 42.041302 0 0 0 27.447078 554.92106 L 237.55332 554.92106 L 237.55332 575.98913 A 42.041451 42.041451 0 0 0 279.59427 618.02877 A 42.041451 42.041451 0 0 0 321.63522 575.98913 L 321.63522 554.92106 L 573.79472 554.92106 A 42.041302 42.041302 0 0 0 615.83567 512.88143 A 42.041302 42.041302 0 0 0 573.79472 470.83974 L 321.63522 470.83974 L 321.63522 449.80042 A 42.041451 42.041451 0 0 0 279.59427 407.76078 z ">
                            </path>
                        </g>
                    </g>
                </svg>
                <span :class="open ? 'block' : 'hidden'" class="text-nowrap">Settings</span>
            </li>
        </a>




    </ul>

</div>
