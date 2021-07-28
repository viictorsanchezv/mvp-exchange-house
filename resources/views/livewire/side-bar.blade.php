      <div x-data="{
                  openTab: 1,
                  activeClasses: 'border-l border-t border-r rounded-t text-blue-700',
                  inactiveClasses: 'text-blue-500 hover:text-blue-800'
                }" class='flex'>   
          <div class="bg-gray-800 shadow-xl h-16 fixed bottom-0 md:relative md:h-screen z-10 w-full md:w-3/12">
            <div class="md:w-5/6 md:top-0 content-center md:content-start text-left justify-between">
                <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
                    <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }"class="mr-3 flex-1">
                        <a href="#" :class="openTab === 1 ? activeClasses : inactiveClasses" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                            <i class="fas fa-tasks pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Dashboard</span>
                        </a>
                    </li>
                    <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }"  class="mr-3 flex-1">
                        <a :class="openTab === 2 ? activeClasses : inactiveClasses" href="#" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                            <i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Messages</span>
                        </a>
                    </li>
                    <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="mr-3 flex-1">
                        <a :class="openTab === 3 ? activeClasses : inactiveClasses" href="#" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-blue-600">
                            <i class="fas fa-chart-area pr-0 md:pr-3 text-blue-600"></i><span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">Analytics</span>
                        </a>
                    </li>
                    <li @click="openTab = 4" :class="{ '-mb-px': openTab === 4 }" class="mr-3 flex-1">
                        <a :class="openTab === 4 ? activeClasses : inactiveClasses" href="#" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                            <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Payments</span>
                        </a>
                    </li>
                </ul>
            </div>
          <!-- Close tab div -->
          </div>

          <div class="md:w-9/12 sm pt-4">
              <div x-show="openTab === 1">Tab #1</div>
              <div x-show="openTab === 2">Tab #2</div>
              <div x-show="openTab === 3">Tab #3</div>
              <div x-show="openTab === 4">Tab #4</div>
          </div>
      </div>      