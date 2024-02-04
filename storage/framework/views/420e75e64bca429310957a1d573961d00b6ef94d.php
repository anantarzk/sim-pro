
<?php if($paginator->hasPages()): ?>
    <nav role="navigation" aria-label="Pagination Navigation"
        class="flex items-center justify-between p-4 border-t select-none border-secondary-200 dark:border-secondary-600 sm:px-6">
        <div class="flex justify-between flex-1 sm:hidden">
            <?php if($paginator->onFirstPage()): ?>
                
                <span
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-400 bg-white border border-gray-300 rounded dark:text-gray-400 dark:bg-secondary-700 dark:border-secondary-600">
                    <?php echo __('pagination.previous'); ?>

                </span>
            <?php else: ?>
                
                <a href="<?php echo e($paginator->previousPageUrl()); ?>"
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 transition bg-white border border-gray-300 rounded dark:text-gray-200 dark:border-secondary-600 hover:text-gray-400 dark:hover:text-gray-300 focus:outline-none focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-30 dark:bg-secondary-700 dark:focus:ring-primary-500 dark:focus:ring-opacity-30">
                    <?php echo __('pagination.previous'); ?>

                </a>
            <?php endif; ?>
            
            <?php if($paginator->hasMorePages()): ?>
                <a href="<?php echo e($paginator->nextPageUrl()); ?>"
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 transition bg-white border border-gray-300 rounded dark:text-gray-200 dark:border-secondary-600 hover:text-gray-400 dark:hover:text-gray-300 focus:outline-none focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-30 dark:bg-secondary-700 dark:focus:ring-primary-500 dark:focus:ring-opacity-30">
                    <?php echo __('pagination.next'); ?>

                </a>
            <?php else: ?>
                
                <span
                    class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium leading-5 text-gray-400 bg-white border border-gray-300 rounded dark:text-gray-400 dark:bg-secondary-700 dark:border-secondary-600">
                    <?php echo __('pagination.next'); ?>

                </span>
            <?php endif; ?>
        </div>

        <div class="flex-col hidden lg:flex-row sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm leading-5 dark:text-gray-300">
                    <?php echo e(__('pagination.showing')); ?>

                    <span class="font-medium"><?php echo e($paginator->firstItem()); ?></span>
                    <?php echo e(__('pagination.to')); ?>

                    <span class="font-medium"><?php echo e($paginator->lastItem()); ?></span>
                    <?php echo e(__('pagination.of')); ?>

                    <span class="font-medium"><?php echo e($paginator->total()); ?></span>
                    <?php echo e(__('pagination.results')); ?>

                </p>
            </div>

            <div>
                <span class="relative z-0 inline-flex mt-2 shadow-sm lg:mt-0">
                    
                    <?php if($paginator->onFirstPage()): ?>
                        <span aria-disabled="true" aria-label="<?php echo e(__('pagination.previous')); ?>">
                            <span
                                class="relative inline-flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-400 bg-white border border-gray-300 rounded-l dark:text-gray-400 dark:border-secondary-600 dark:bg-secondary-700"
                                aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    <?php else: ?>
                        
                        <a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev"
                            class="relative inline-flex items-center px-2 py-2 text-sm font-medium leading-5 transition bg-white border border-gray-300 rounded-l hover:text-gray-400 focus:z-10 focus:outline-none focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-30 dark:focus:ring-primary-500 dark:focus:ring-opacity-30 dark:text-gray-300 dark:border-secondary-600 dark:bg-secondary-700"
                            aria-label="<?php echo e(__('pagination.previous')); ?>">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    <?php endif; ?>

                    
                    <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        <?php if(is_string($element)): ?>
                            <span aria-disabled="true">
                                <span
                                    class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-400 bg-white border border-gray-300 cursor-default dark:text-gray-200 dark:bg-secondary-700 dark:border-secondary-600"><?php echo e($element); ?></span>
                            </span>
                        <?php endif; ?>

                        
                        <?php if(is_array($element)): ?>
                            <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($page == $paginator->currentPage()): ?>
                                    <span aria-current="page">
                                        <span
                                            class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-400 bg-white border border-gray-300 dark:text-gray-400 dark:border-secondary-600 dark:bg-secondary-700"><?php echo e($page); ?></span>
                                    </span>
                                <?php else: ?>
                                    
                                    <a href="<?php echo e($url); ?>"
                                        class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 transition bg-white border border-gray-300 hover:text-gray-400 dark:hover:text-gray-300 focus:z-10 focus:outline-none focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-30 dark:focus:ring-primary-500 dark:focus:ring-opacity-30 dark:text-gray-200 dark:border-secondary-600 dark:bg-secondary-700"
                                        aria-label="<?php echo e(__('pagination.goto_page', ['page' => $page])); ?>">
                                        <?php echo e($page); ?>

                                    </a>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    
                    <?php if($paginator->hasMorePages()): ?>
                        <a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next"
                            class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium leading-5 transition bg-white border border-gray-300 rounded-r hover:text-gray-400 focus:z-10 focus:outline-none focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-30 dark:focus:ring-primary-500 dark:focus:ring-opacity-30 dark:text-gray-200 dark:border-secondary-600 dark:bg-secondary-700"
                            aria-label="<?php echo e(__('pagination.next')); ?>">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    <?php else: ?>
                        
                        <span aria-disabled="true" aria-label="<?php echo e(__('pagination.next')); ?>">
                            <span
                                class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium leading-5 text-gray-400 bg-white border border-gray-300 rounded-r dark:text-gray-400 dark:border-secondary-600 dark:bg-secondary-700"
                                aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    <?php endif; ?>
                </span>
            </div>
        </div>
    </nav>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\simpro_TA\sim-pro\resources\views/vendor/pagination/default.blade.php ENDPATH**/ ?>