@if (session('myerror'))
    <div class="alert flex flex-row items-center bg-red-200 p-3 rounded border-b-2 border-red-300 py-1 mb-4">
        <div class="alert-icon flex items-center bg-red-100 border-2 border-red-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
                <span class="text-red-500">
                    <svg fill="currentColor"
                         viewBox="0 0 20 20"
                         class="h-6 w-6">
						<path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
					</svg>
                </span>
        </div>
        <div class="alert-content ml-4">
            <div class="alert-description text-sm text-red-600">
                {{ session('myerror') }}
            </div>
        </div>
    </div>
@endif
