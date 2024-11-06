<?php

/**
 * Plugin Name: Easy H2 Navigator
 *
 * Description: The H2 Section Navigator plugin automatically generates a dynamic, clickable table of contents based on <h2> headings found on individual posts or pages. This TOC not only helps readers quickly understand the structure of your content, but it also enhances navigation by allowing users to smoothly scroll to each section. Perfect for long articles or guides, the H2 Section Navigator adds a visually appealing, interactive list at the beginning of the content, guiding readers to key sections effortlessly.
 *
 * Version: 1.0.0
 *
 * Author: hassan Ali Askari
 * Author URI: https://t.me/hassan7303
 * Plugin URI: https://github.com/hassan7303
 *
 * License: MIT
 * License URI: https://opensource.org/licenses/MIT
 *
 * Email: hassanali7303@gmail.com
 * Domain Path: https://hsnali.ir
 */


if (!defined('ABSPATH')) {
    exit;
}

function h2_header_list_enqueue_scripts()
{
    if (is_single()) {
        ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const headers = document.querySelectorAll('h2');

                if (headers.length > 0) {
                    const firstHeader = headers[0]; // اولین تگ h2
                    
                    const headerList = document.createElement('div');
                    headerList.style.marginBottom = '20px';
                    headerList.style.padding = '10px';

                    // اعمال استایل‌های مشابه تگ h2
                    headerList.style.fontWeight = window.getComputedStyle(firstHeader).fontWeight;
                    headerList.style.lineHeight = window.getComputedStyle(firstHeader).lineHeight;

                    const title = document.createElement('strong');
                    title.textContent = 'مباحثی که در این نوشتار بررسی می گردد:';
                    headerList.appendChild(title);

                    const ul = document.createElement('ul');
                    headerList.appendChild(ul);

                    headers.forEach((header) => {
                        const li = document.createElement('li');
                        li.textContent = header.textContent;
                        li.style.cursor = 'pointer';
                        li.style.listStyleType = 'none';

                        // افزودن آیکون فلش به سمت راست
                        const icon = document.createElement('i');
                        icon.classList.add('fa', 'fa-angle-double-left');
                        icon.setAttribute('aria-hidden', 'true');
                        icon.style.paddingLeft = '10px';

                        li.prepend(icon);

                        li.addEventListener('click', () => {
                            const headerPosition = header.getBoundingClientRect().top + window.pageYOffset;
                            const offset = 100; // فاصله‌ی مورد نظر
                            window.scrollTo({
                                top: headerPosition - offset,
                                behavior: 'smooth'
                            });
                        });

                        ul.appendChild(li);
                    });

                    // قرار دادن فهرست قبل از اولین تگ h2
                    firstHeader.insertAdjacentElement('beforebegin', headerList);
                }
            });
        </script>
        <?php
    }
}

add_action('wp_footer', 'h2_header_list_enqueue_scripts');
