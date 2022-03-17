<template>
    <div class="py-4 text-gray-500 dark:text-gray-400">
    <div class="flex justify-center text-lg font-bold text-gray-800 dark:text-gray-200" href="#"
      >HRM</div
    >
    <ul class="mt-6">
      <li class="relative px-6 py-1 main-menu">
        <span
          class="
            absolute
            inset-y-0
            left-0
            w-1
            bg-purple-600
            rounded-tr-lg rounded-br-lg
          "
          aria-hidden="true"
        ></span>
        <a href="/"
          class="
            inline-flex
            items-center
            w-full
            text-sm
            font-semibold
            text-gray-800
            transition-colors
            duration-150
            hover:text-gray-800
            dark:hover:text-gray-200 dark:text-gray-100
            
          "
        >
          <svg
            class="w-5 h-5"
            aria-hidden="true"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
            />
          </svg>
          <span class="ml-2">Dashboard</span>
        </a>
      </li>
      
      <li
        class="relative px-6 py-1"
      >
        <button
          class="
            inline-flex
            items-center
            justify-between
            w-full
            text-sm
            font-semibold
            transition-colors
            duration-150
            hover:text-gray-800
            dark:hover:text-gray-200
          "
          @click="isHRMMenuOpen = !isHRMMenuOpen"
          aria-haspopup="true"
        >
          <span class="inline-flex items-center">
            <svg
              class="w-5 h-5"
              aria-hidden="true"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
              ></path>
            </svg>
            <span class="ml-2">HRM</span>
          </span>
          <svg
            class="w-4 h-4"
            aria-hidden="true"
            fill="currentColor"
            viewBox="0 0 20 20"
          >
            <path
              fill-rule="evenodd"
              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </button>
        <template v-if="isHRMMenuOpen">
          <ul class="mt-1">
            <!-- Employee  -->
            <li class="relative pl-2 py-1">
              <a
                class="
                  inline-flex
                  items-center
                  w-full
                  text-sm
                  font-semibold
                  transition-colors
                  duration-150
                  hover:text-gray-800
                  dark:hover:text-gray-200
                "
                to="/buyers"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                  />
                </svg>
                <span class="ml-2">Employee</span>
              </a>
            </li>

            <!-- Holidays  -->
            <li class="relative pl-2 py-1">
              <a
                class="
                  inline-flex
                  items-center
                  w-full
                  text-sm
                  font-semibold
                  transition-colors
                  duration-150
                  hover:text-gray-800
                  dark:hover:text-gray-200
                "
                to="/buyers"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                  />
                </svg>
                <span class="ml-2">Holidays</span>
              </a>
            </li>

            <!-- Schedule Menu  -->
            <li class="pl-2 py-1">
              <button
                class="
                  inline-flex
                  items-center
                  justify-between
                  w-full
                  text-sm
                  font-semibold
                  transition-colors
                  duration-150
                  hover:text-gray-800
                  dark:hover:text-gray-200
                "
                @click="isScheduleMenuOpen = !isScheduleMenuOpen"
                aria-haspopup="true"
              >
                <span class="inline-flex items-center">
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
                    ></path>
                  </svg>
                  <span class="ml-2">Schedule</span>
                </span>
                <svg
                  class="w-4 h-4"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
              <template v-if="isScheduleMenuOpen">
                <ul class="mt-1">
                  <li class="relative px-2 py-1">
                    <a
                      class="
                        inline-flex
                        items-center
                        w-full
                        text-sm
                        font-semibold
                        transition-colors
                        duration-150
                        hover:text-gray-800
                        dark:hover:text-gray-200
                      "
                      to="/po-sheet"
                    >
                      <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                        />
                      </svg>
                      <span class="ml-2">Shifts</span>
                    </a>
                  </li>
                  
                </ul>
              </template>
            </li>

            <!-- Rules Menu -->
            <li class="pl-2 py-1">
              <button
                class="
                  inline-flex
                  items-center
                  justify-between
                  w-full
                  text-sm
                  font-semibold
                  transition-colors
                  duration-150
                  hover:text-gray-800
                  dark:hover:text-gray-200
                "
                @click="isRulesMenuOpen = !isRulesMenuOpen"
                aria-haspopup="true"
              >
                <span class="inline-flex items-center">
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
                    ></path>
                  </svg>
                  <span class="ml-2">Rules</span>
                </span>
                <svg
                  class="w-4 h-4"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
              <template v-if="isRulesMenuOpen">
                <ul class="mt-1">
                  <!-- Week Days -->
                  <li class="relative px-2 py-1">
                    <a
                      class="
                        inline-flex
                        items-center
                        w-full
                        text-sm
                        font-semibold
                        transition-colors
                        duration-150
                        hover:text-gray-800
                        dark:hover:text-gray-200
                      "
                      to="/po-sheet"
                    >
                      <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                        />
                      </svg>
                      <span class="ml-2">Week Days</span>
                    </a>
                  </li>

                  <!-- Work Types  -->
                  <li class="relative px-2 py-1">
                    <a
                      class="
                        inline-flex
                        items-center
                        w-full
                        text-sm
                        font-semibold
                        transition-colors
                        duration-150
                        hover:text-gray-800
                        dark:hover:text-gray-200
                      "
                      to="/po-sheet"
                    >
                      <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                        />
                      </svg>
                      <span class="ml-2">Work Types</span>
                    </a>
                  </li>

                  <!-- OT Levels  -->
                  <li class="relative px-2 py-1">
                    <a
                      class="
                        inline-flex
                        items-center
                        w-full
                        text-sm
                        font-semibold
                        transition-colors
                        duration-150
                        hover:text-gray-800
                        dark:hover:text-gray-200
                      "
                      to="/po-sheet"
                    >
                      <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                        />
                      </svg>
                      <span class="ml-2">OT Levels</span>
                    </a>
                  </li>
                  
                </ul>
              </template>
            </li>

            <!-- Stats  -->
            <li class="relative pl-2 py-1">
              <a
                class="
                  inline-flex
                  items-center
                  w-full
                  text-sm
                  font-semibold
                  transition-colors
                  duration-150
                  hover:text-gray-800
                  dark:hover:text-gray-200
                "
                to="/buyers"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                  />
                </svg>
                <span class="ml-2">Stats</span>
              </a>
            </li>

            


            <!-- <li class="pl-2 py-1">
              <button
                class="
                  inline-flex
                  items-center
                  justify-between
                  w-full
                  text-sm
                  font-semibold
                  transition-colors
                  duration-150
                  hover:text-gray-800
                  dark:hover:text-gray-200
                "
                @click="isScheduleMenuOpen = !isScheduleMenuOpen"
                aria-haspopup="true"
              >
                <span class="inline-flex items-center">
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
                    ></path>
                  </svg>
                  <span class="ml-2">Confirmed Stage</span>
                </span>
                <svg
                  class="w-4 h-4"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
              <template v-if="isScheduleMenuOpen">
                <ul class="mt-1">
                  <li class="relative px-2 py-1">
                    <a
                      class="
                        inline-flex
                        items-center
                        w-full
                        text-sm
                        font-semibold
                        transition-colors
                        duration-150
                        hover:text-gray-800
                        dark:hover:text-gray-200
                      "
                      to="/po-sheet"
                    >
                      <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                        />
                      </svg>
                      <span class="ml-2">PO Sheet</span>
                    </a>
                  </li>
                 
                  <li class="relative px-2 py-1">
                    <a
                      class="
                        inline-flex
                        items-center
                        w-full
                        text-sm
                        font-semibold
                        transition-colors
                        duration-150
                        hover:text-gray-800
                        dark:hover:text-gray-200
                      "
                      to="/breakdown-sheet"
                    >
                      <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                        />
                      </svg>
                      <span class="ml-2">Breakdown</span>
                    </a>
                  </li>
                  <li class="relative px-2 py-1">
                    <a
                      class="
                        inline-flex
                        items-center
                        w-full
                        text-sm
                        font-semibold
                        transition-colors
                        duration-150
                        hover:text-gray-800
                        dark:hover:text-gray-200
                      "
                      to="/bom-sheet"
                    >
                      <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                        />
                      </svg>
                      <span class="ml-2">BOM</span>
                    </a>
                  </li>
                  <li class="relative px-2 py-1">
                    <button
                      class="
                        inline-flex
                        items-center
                        justify-between
                        w-full
                        text-sm
                        font-semibold
                        transition-colors
                        duration-150
                        hover:text-gray-800
                        dark:hover:text-gray-200
                      "
                      @click="
                        isMaterialBookingMenuOpen = !isMaterialBookingMenuOpen
                      "
                      aria-haspopup="true"
                    >
                      <span class="inline-flex items-center">
                        <svg
                          class="w-5 h-5"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
                          ></path>
                        </svg>
                        <span class="ml-2">Material Booking</span>
                      </span>
                      <svg
                        class="w-4 h-4"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"
                        ></path>
                      </svg>
                    </button>
                    <template v-if="isMaterialBookingMenuOpen">
                      <ul class="mt-1">
                        <li class="relative px-4 py-1">
                          <a
                            class="
                              inline-flex
                              items-center
                              w-full
                              text-sm
                              font-semibold
                              transition-colors
                              text-gray-700
                              duration-150
                              hover:text-gray-900
                              dark:hover:text-gray-200
                            "
                            to="/create-booking"
                          >
                            <svg
                              class="h-5 w-5"
                              aria-hidden="true"
                              fill="none"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 4v16m8-8H4"
                              />
                            </svg>
                            <span class="ml-2">Create Booking</span>
                          </a>
                        </li>
                        <li class="relative px-4 py-1">
                          <a
                            class="
                              inline-flex
                              items-center
                              w-full
                              text-sm
                              font-semibold
                              transition-colors
                              duration-150
                              hover:text-gray-800
                              dark:hover:text-gray-200
                            "
                            to="/fabric-booking"
                          >
                            <svg
                              class="w-5 h-5"
                              aria-hidden="true"
                              fill="none"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                            >
                              <path
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                              />
                            </svg>
                            <span class="ml-2">Fabric Booking</span>
                          </a>
                        </li>
                        <li class="relative px-4 py-1">
                          <a
                            class="
                              inline-flex
                              items-center
                              w-full
                              text-sm
                              font-semibold
                              transition-colors
                              duration-150
                              hover:text-gray-800
                              dark:hover:text-gray-200
                            "
                            to="/thread-booking"
                          >
                            <svg
                              class="w-5 h-5"
                              aria-hidden="true"
                              fill="none"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                            >
                              <path
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                              />
                            </svg>
                            <span class="ml-2">Thread Booking</span>
                          </a>
                        </li>
                        
                        <li class="relative px-4 py-1">
                          <a
                            class="
                              inline-flex
                              items-center
                              w-full
                              text-sm
                              font-semibold
                              transition-colors
                              duration-150
                              hover:text-gray-800
                              dark:hover:text-gray-200
                            "
                            to="/elastic-booking"
                          >
                            <svg
                              class="w-5 h-5"
                              aria-hidden="true"
                              fill="none"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                            >
                              <path
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                              />
                            </svg>
                            <span class="ml-2">Elastic Booking</span>
                          </a>
                        </li>
                      </ul>
                    </template>
                  </li>
                  <li class="relative px-2 py-1">
                    <a
                      class="
                        inline-flex
                        items-center
                        w-full
                        text-sm
                        font-semibold
                        transition-colors
                        duration-150
                        hover:text-gray-800
                        dark:hover:text-gray-200
                      "
                      to="/merchandising/pi"
                    >
                      <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                        />
                      </svg>
                      <span class="ml-2">PI</span>
                    </a>
                  </li>
                  <li class="relative px-2 py-1">
                    <a
                      class="
                        inline-flex
                        items-center
                        w-full
                        text-sm
                        font-semibold
                        transition-colors
                        duration-150
                        hover:text-gray-800
                        dark:hover:text-gray-200
                      "
                      to="/store/material-status"
                    >
                      <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                        />
                      </svg>
                      <span class="ml-2">Material Status</span>
                    </a>
                  </li>
                </ul>
              </template>
            </li> -->
          </ul>
        </template>
      </li>
    </ul>
</div>
</template>
<script setup>
  import { ref } from "vue";
  const menu = ref({});
  const isHRMMenuOpen = ref(false);
  const isMaterialBookingMenuOpen = ref(false);
  const isSampleMenuOpen = ref(false);
  const isDevelopmentStageMenuOpen = ref(false);
  const isStoreMenuOpen = ref(false);
  const isHeadMenuOpen = ref(false);
  const isScheduleMenuOpen = ref(false);
  const isStatsMenuOpen = ref(false);
  const isRulesMenuOpen = ref(false);
  const isSettingsMenuOpen = ref(false);
  const isProductionMenuOpen = ref(false);
  const isSalesMenuOpen = ref(false);
  const isFinishingMenuOpen = ref(false);
  const isMaintenanceMenuOpen = ref(false);
  const isCuttingMenuOpen = ref(false);
  const isSewingMenuOpen = ref(false);
  const isCommercialMenuOpen = ref(false);
  const isIEMenuOpen = ref(false);
  const isCADMenuOpen = ref(false);
  const isPlanningMenuOpen = ref(false);
  const isImportMenuOpen = ref(false);
  const isExportMenuOpen = ref(false);
</script>