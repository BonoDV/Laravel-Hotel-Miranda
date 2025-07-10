import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "public/assets/sass/about/about_styles.scss",
                "public/assets/sass/contact/contact_styles.scss",
                "public/assets/sass/home/styles.scss",
                "public/assets/sass/offers/offers_styles.scss",
                "public/assets/sass/rooms/rooms_styles.scss",
                "public/assets/sass/rooms_details/rooms_details_styles.scss",
            ],
            refresh: true,
        }),
    ],
});
