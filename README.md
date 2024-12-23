# **Wordpress Tailwind Boilerplate**

## **What is in this package**
This is a Wordpress theme boilerplate. The following features are already included:

- **npm & vite** 🚀
- **Tailwind** 🌿
- **Scss** 🎨
- **React** ⚛️
- **PHP composer** 🛠️

### **Additional Features**
- **CustomFields class** with several form fields to be used as Custom Fields 🛠️
- **SearchEndpoint class** to extend and customize the wp-api 🔍
- A not-styled **React search component** 🧩
- **Helpers:** PHP and JS simple helpers 🛎️
- A sample **custom post type class** for extension ✍️

---

## **Install**

1. Clone the theme into `wp-content/themes/` 🖥️
2. Ensure you have npm installed. Inside the theme directory (`hodcode`), run:
   ```bash
   npm install
   ```
3. From WordPress admin themes, activate the `hodcode` theme. ✅

---

## **Development Environment**
For development, first add the following constant in `wp-config.php` in the WordPress root:
```php
   define("IS_VITE_DEVELOPMENT", true);
```

Then, run the following command inside the theme directory:
```bash
   npm run dev
```
You will now see CSS changes instantly on the fly ✨.

---

## **Production**
Inside the theme directory, run:
```bash
   npm run build
```
Ensure `IS_VITE_DEVELOPMENT` is set to `false` in `wp-config.php`. After that, you should be good to go 🚀.

---

## **Vscode PHP Setup**
To bypass WordPress function errors in VScode when you load the theme directory only (instead of loading the project from the WP root), follow these steps:

1. Install the `PHP Intelephense` VScode extension 🔧
2. Navigate to **File -> Preferences -> Settings** ⚙️
3. In the left panel of the settings page, go to **Extensions -> Intelephense** and scroll down to find `Intelephense: Stubs` 📜
4. At the end of the list, click **Add Item** and add `wordpress` ➕

By following these steps, you should now be able to get suggestions, and WordPress functions will be recognized as defined. 🎉

