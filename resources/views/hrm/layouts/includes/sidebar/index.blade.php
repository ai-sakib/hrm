<div class="py-4 text-gray-500 dark:text-gray-400">
  @php
    // Employee Routes
    $isEmployeeIndexRoute = request()->routeIs('hrm.employees.index');
    $isEmployeeCreateRoute = request()->routeIs('hrm.employees.create');
    $isEmployeeEditRoute = request()->routeIs('hrm.employees.edit');
    $isEmployeeRoute = $isEmployeeIndexRoute || $isEmployeeCreateRoute || $isEmployeeEditRoute;
    
    // Holiday Routes
    $isHolidayIndexRoute = request()->routeIs('hrm.holidays.index');
    $isHolidayCreateRoute = request()->routeIs('hrm.holidays.create');
    $isHolidayEditRoute = request()->routeIs('hrm.holidays.edit');
    $isHolidayRoute = $isHolidayIndexRoute || $isHolidayCreateRoute || $isHolidayEditRoute;

    $isCalendarRoute = request()->routeIs('hrm.calendar');
    // OT Level Routes
    $isOTLevelIndexRoute = request()->routeIs('hrm.ot-levels.index');
    $isOTLevelCreateRoute = request()->routeIs('hrm.ot-levels.create');
    $isOTLevelEditRoute = request()->routeIs('hrm.ot-levels.edit');
    $isOTLevelRoute = $isOTLevelIndexRoute || $isOTLevelCreateRoute || $isOTLevelEditRoute;

    // Work Type Routes
    $isWorkTypeIndexRoute = request()->routeIs('hrm.work-types.index');
    $isWorkTypeCreateRoute = request()->routeIs('hrm.work-types.create');
    $isWorkTypeEditRoute = request()->routeIs('hrm.work-types.edit');
    $isWorkTypeRoute = $isWorkTypeIndexRoute || $isWorkTypeCreateRoute || $isWorkTypeEditRoute;

    // Shift Routes
    $isShiftIndexRoute = request()->routeIs('hrm.shifts.index');
    $isShiftCreateRoute = request()->routeIs('hrm.shifts.create');
    $isShiftEditRoute = request()->routeIs('hrm.shifts.edit');
    $isShiftRoute = $isShiftIndexRoute || $isShiftCreateRoute || $isShiftEditRoute;

    //Stats
    $isRequiredWorkRoute = request()->routeIs('hrm.required-work.index');
    $isRoundWorkRoute = request()->routeIs('hrm.round-work.index');
    $isLateInRoute = request()->routeIs('hrm.late-in.index');
    $isEarlyOutRoute = request()->routeIs('hrm.early-out.index');
    $isAbsentRoute = request()->routeIs('hrm.absent.index');
    $isBreakRoute = request()->routeIs('hrm.breaks.index');
    $isSickLeaveRoute = request()->routeIs('hrm.sick-leaves.index');
    $isVacationRoute = request()->routeIs('hrm.vacations.index');
    $isCasualLeaveRoute = request()->routeIs('hrm.casual-leaves.index');
    $isEarnLeaveRoute = request()->routeIs('hrm.earn-leaves.index');
    
    // Week Days Route
    $isWeekDaysRoute = request()->routeIs('hrm.week-days.index');

    $isScheduleMenuOpen = $isShiftRoute;
    
    $isRulesMenuOpen = $isWeekDaysRoute || $isOTLevelRoute || $isWorkTypeRoute;
    $isStatsMenuOpen = 'false';
    $isHRMMenuOpen = $isCalendarRoute || $isEmployeeRoute || $isHolidayRoute || $isRulesMenuOpen || $isScheduleMenuOpen || $isStatsMenuOpen;
   

    $isCalendarRoute = $isCalendarRoute ? 'true' : 'false';
    $isEmployeeRoute = $isEmployeeRoute ? 'true' : 'false';
    $isHolidayRoute = $isHolidayRoute ? 'true' : 'false';
    $isWeekDaysRoute = $isWeekDaysRoute ? 'true' : 'false';
    $isOTLevelRoute = $isOTLevelRoute ? 'true' : 'false';
    $isWorkTypeRoute = $isWorkTypeRoute ? 'true' : 'false';
    $isShiftRoute = $isShiftRoute ? 'true' : 'false';

    //Stats
    $isRequiredWorkRoute = $isRequiredWorkRoute ? 'true' : 'false';
    $isRoundWorkRoute = $isRoundWorkRoute ? 'true' : 'false';
    $isLateInRoute = $isLateInRoute ? 'true' : 'false';
    $isEarlyOutRoute = $isEarlyOutRoute ? 'true' : 'false';
    $isAbsentRoute = $isAbsentRoute ? 'true' : 'false';
    $isBreakRoute = $isBreakRoute ? 'true' : 'false';
    $isSickLeaveRoute = $isSickLeaveRoute ? 'true' : 'false';
    $isVacationRoute = $isVacationRoute ? 'true' : 'false';
    $isCasualLeaveRoute = $isCasualLeaveRoute ? 'true' : 'false';
    $isEarnLeaveRoute = $isEarnLeaveRoute ? 'true' : 'false';

    // Menu Open
    $isScheduleMenuOpen = $isScheduleMenuOpen ? 'true' : 'false';
    $isRulesMenuOpen = $isRulesMenuOpen ? 'true' : 'false';
    $isHRMMenuOpen = $isHRMMenuOpen ? 'true' : 'false';
    
    
  @endphp
    
  <div class="flex justify-center text-lg font-bold text-gray-800 dark:text-gray-200" href="#"
    >HRM</div
  >
  <ul class="mt-6">
    
    @include('hrm.layouts.includes.sidebar.dashboard')
    
    
    <li x-data="{ isHRMMenuOpen: {{ $isHRMMenuOpen }} }"
      class="relative px-6 py-1"
    >
      <button
        x-on:click="isHRMMenuOpen = !isHRMMenuOpen"
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
        <svg x-show="isHRMMenuOpen"
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
        <svg x-show="!isHRMMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
        </svg>
      </button>
      <div x-show="isHRMMenuOpen" x-transition class="hrm" id="hrm">
        <ul class="mt-1">
          <!-- Employee  -->
          <li class="relative pl-2 py-1">
            <span x-show="{{ $isEmployeeRoute }}"
              class="
                absolute
                inset-y-0
                -left-6
                w-1
                bg-purple-600
                rounded-tr-lg rounded-br-lg
              "
              aria-hidden="true"
            ></span>
            <a href="{{ route('hrm.employees.index') }}"
              :class="{ 'text-gray-800': {{ $isEmployeeRoute }} }"
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
              <span class="ml-2">Employees</span>
            </a>
          </li>

          <!-- Holidays  -->
          <li class="relative pl-2 py-1">
            <span x-show="{{ $isHolidayRoute }}"
              class="
                absolute
                inset-y-0
                -left-6
                w-1
                bg-purple-600
                rounded-tr-lg rounded-br-lg
              "
              aria-hidden="true"
            ></span>
            <a href="{{ route('hrm.holidays.index') }}"
              :class="{ 'text-gray-800': {{ $isHolidayRoute }} }"
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
              to="/holidays"
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

          {{-- Calender --}}
          <li class="relative pl-2 py-1">
            <span x-show="{{ $isCalendarRoute }}"
              class="
                absolute
                inset-y-0
                -left-6
                w-1
                bg-purple-600
                rounded-tr-lg rounded-br-lg
              "
              aria-hidden="true"
            ></span>
            <a href="{{ route('hrm.calendar') }}"
              :class="{ 'text-gray-800': {{ $isCalendarRoute }} }"
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
              <span class="ml-2">Calendar</span>
            </a>
          </li>
          <!-- Schedule Menu  -->
          <li class="pl-2 py-1" x-data="{ isScheduleMenuOpen: {{ $isScheduleMenuOpen }} }">
            <button
              x-on:click="isScheduleMenuOpen = !isScheduleMenuOpen" 
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
              <svg x-show="isScheduleMenuOpen"
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
              <svg x-show="!isScheduleMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
              </svg>
            </button>
            <div x-show="isScheduleMenuOpen" x-transition class="schedule" id="schedule">
              <ul class="mt-1">
                <li class="relative px-2 py-1">
                  <span x-show="{{ $isShiftRoute }}"
                    class="
                      absolute
                      inset-y-0
                      -left-8
                      w-1
                      bg-purple-600
                      rounded-tr-lg rounded-br-lg
                    "
                    aria-hidden="true"
                  ></span>
                  <a href="{{ route('hrm.shifts.index') }}"
                    :class="{'text-gray-800' : {{ $isShiftRoute }} }"
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
            </div>
          </li>

          <!-- Rules Menu -->
          <li class="pl-2 py-1" x-data="{ isRulesMenuOpen: {{ $isRulesMenuOpen }} }">
            <button
              x-on:click="isRulesMenuOpen = !isRulesMenuOpen"
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
              <svg x-show="isRulesMenuOpen"
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
              <svg x-show="!isRulesMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
              </svg>
            </button>
            <div x-show="isRulesMenuOpen" x-transition class="rules" id="rules">
              <ul class="mt-1">
                <!-- Week Days -->
                <li class="relative px-2 py-1">
                  <span x-show="{{ $isWeekDaysRoute }}"
                    class="
                      absolute
                      inset-y-0
                      -left-8
                      w-1
                      bg-purple-600
                      rounded-tr-lg rounded-br-lg
                    "
                    aria-hidden="true"
                  ></span>
                  <a href="{{ route('hrm.week-days.index') }}"
                    :class="{'text-gray-800' : {{ $isWeekDaysRoute }} }"
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
                  <span x-show="{{ $isWorkTypeRoute }}"
                    class="
                      absolute
                      inset-y-0
                      -left-8
                      w-1
                      bg-purple-600
                      rounded-tr-lg rounded-br-lg
                    "
                    aria-hidden="true"
                  ></span>
                  <a
                    href="{{ route('hrm.work-types.index') }}"
                    :class="{'text-gray-800' : {{ $isWorkTypeRoute }} }"
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
                  <span x-show="{{ $isOTLevelRoute }}"
                    class="
                      absolute
                      inset-y-0
                      -left-8
                      w-1
                      bg-purple-600
                      rounded-tr-lg rounded-br-lg
                    "
                    aria-hidden="true"
                  ></span>
                  <a
                    href="{{ route('hrm.ot-levels.index') }}"
                    :class="{'text-gray-800' : {{ $isOTLevelRoute }} }"
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
            </div>
          </li>

          <!-- Stats  -->
          <li class="pl-2 py-1" x-data="{ isStatsMenuOpen: {{ $isStatsMenuOpen }} }">
            <button
              x-on:click="isStatsMenuOpen = !isStatsMenuOpen"
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
                <span class="ml-2">Stats</span>
              </span>
              <svg x-show="isStatsMenuOpen"
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
              <svg x-show="!isStatsMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
              </svg>
            </button>
            <div x-show="isStatsMenuOpen" x-transition class="rules" id="rules">
              <ul class="mt-1">
                <!-- Required Work -->
                <li class="relative px-2 py-1">
                  <span x-show="{{ $isRequiredWorkRoute }}"
                    class="
                      absolute
                      inset-y-0
                      -left-8
                      w-1
                      bg-purple-600
                      rounded-tr-lg rounded-br-lg
                    "
                    aria-hidden="true"
                  ></span>
                  <a href="{{ route('hrm.required-work.index') }}"
                    :class="{'text-gray-800' : {{ $isRequiredWorkRoute }} }"
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
                    <span class="ml-2">Required Work</span>
                  </a>
                </li>

                <!-- Round Work  -->
                <li class="relative px-2 py-1">
                  <span x-show="{{ $isRoundWorkRoute }}"
                    class="
                      absolute
                      inset-y-0
                      -left-8
                      w-1
                      bg-purple-600
                      rounded-tr-lg rounded-br-lg
                    "
                    aria-hidden="true"
                  ></span>
                  <a
                    href="{{ route('hrm.round-work.index') }}"
                    :class="{'text-gray-800' : {{ $isRoundWorkRoute }} }"
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
                    <span class="ml-2">Round Work</span>
                  </a>
                </li>


                <!-- Late In  -->
                <li class="relative px-2 py-1">
                  <span x-show="{{ $isLateInRoute }}"
                    class="
                      absolute
                      inset-y-0
                      -left-8
                      w-1
                      bg-purple-600
                      rounded-tr-lg rounded-br-lg
                    "
                    aria-hidden="true"
                  ></span>
                  <a
                    href="{{ route('hrm.late-in.index') }}"
                    :class="{'text-gray-800' : {{ $isLateInRoute }} }"
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
                    <span class="ml-2">Late In</span>
                  </a>
                </li>

                <!-- Early Out  -->
                <li class="relative px-2 py-1">
                  <span x-show="{{ $isEarlyOutRoute }}"
                    class="
                      absolute
                      inset-y-0
                      -left-8
                      w-1
                      bg-purple-600
                      rounded-tr-lg rounded-br-lg
                    "
                    aria-hidden="true"
                  ></span>
                  <a
                    href="{{ route('hrm.early-out.index') }}"
                    :class="{'text-gray-800' : {{ $isEarlyOutRoute }} }"
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
                    <span class="ml-2">Early Out</span>
                  </a>
                </li>

                <!-- Absent  -->
                <li class="relative px-2 py-1">
                  <span x-show="{{ $isAbsentRoute }}"
                    class="
                      absolute
                      inset-y-0
                      -left-8
                      w-1
                      bg-purple-600
                      rounded-tr-lg rounded-br-lg
                    "
                    aria-hidden="true"
                  ></span>
                  <a
                    href="{{ route('hrm.absents.index') }}"
                    :class="{'text-gray-800' : {{ $isAbsentRoute }} }"
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
                    <span class="ml-2">Absent</span>
                  </a>
                </li>

                <!-- Break  -->
                <li class="relative px-2 py-1">
                  <span x-show="{{ $isBreakRoute }}"
                    class="
                      absolute
                      inset-y-0
                      -left-8
                      w-1
                      bg-purple-600
                      rounded-tr-lg rounded-br-lg
                    "
                    aria-hidden="true"
                  ></span>
                  <a
                    href="{{ route('hrm.breaks.index') }}"
                    :class="{'text-gray-800' : {{ $isBreakRoute }} }"
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
                    <span class="ml-2">Break</span>
                  </a>
                </li>

                <!-- Sick Leave  -->
                <li class="relative px-2 py-1">
                  <span x-show="{{ $isSickLeaveRoute }}"
                    class="
                      absolute
                      inset-y-0
                      -left-8
                      w-1
                      bg-purple-600
                      rounded-tr-lg rounded-br-lg
                    "
                    aria-hidden="true"
                  ></span>
                  <a
                    href="{{ route('hrm.sick-leaves.index') }}"
                    :class="{'text-gray-800' : {{ $isSickLeaveRoute }} }"
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
                    <span class="ml-2">Sick Leave</span>
                  </a>
                </li>

                <!-- Vacation  -->
                <li class="relative px-2 py-1">
                  <span x-show="{{ $isVacationRoute }}"
                    class="
                      absolute
                      inset-y-0
                      -left-8
                      w-1
                      bg-purple-600
                      rounded-tr-lg rounded-br-lg
                    "
                    aria-hidden="true"
                  ></span>
                  <a
                    href="{{ route('hrm.vacations.index') }}"
                    :class="{'text-gray-800' : {{ $isVacationRoute }} }"
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
                    <span class="ml-2">Vacation</span>
                  </a>
                </li>

                <!-- Casual Leave  -->
                <li class="relative px-2 py-1">
                  <span x-show="{{ $isCasualLeaveRoute }}"
                    class="
                      absolute
                      inset-y-0
                      -left-8
                      w-1
                      bg-purple-600
                      rounded-tr-lg rounded-br-lg
                    "
                    aria-hidden="true"
                  ></span>
                  <a
                    href="{{ route('hrm.casual-leaves.index') }}"
                    :class="{'text-gray-800' : {{ $isCasualLeaveRoute }} }"
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
                    <span class="ml-2">Casual Leave</span>
                  </a>
                </li>

                <!-- Earn Leave  -->
                <li class="relative px-2 py-1">
                  <span x-show="{{ $isEarnLeaveRoute }}"
                    class="
                      absolute
                      inset-y-0
                      -left-8
                      w-1
                      bg-purple-600
                      rounded-tr-lg rounded-br-lg
                    "
                    aria-hidden="true"
                  ></span>
                  <a
                    href="{{ route('hrm.earn-leaves.index') }}"
                    :class="{'text-gray-800' : {{ $isEarnLeaveRoute }} }"
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
                    <span class="ml-2">Earn Leave</span>
                  </a>
                </li>
                
              </ul>
            </div>
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
            <div v-if="isScheduleMenuOpen">
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
                  <div v-if="isMaterialBookingMenuOpen">
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
                  </div>
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
            </div>
          </li> -->
        </ul>
      </div>
    </li>
  </ul>
</div>
{{-- <script>
function openMenu(menu){
  var element = document.querySelector('#' + menu)
  element.classList.toggle("hidden");
}
</script> --}}
