# Laravel 11 透過高效能應用程式介面提升開發之旅的應用程式介面工具組

引入 essa 的 api-tool-kit 套件來擴增透過高效能應用程式介面（API）提升開發之旅的應用程式介面工具組，通過標準化回應、動態分頁、進階篩選和一鍵式完整建立、讀取、更新、刪除（CRUD）設定來增強您的應用程式介面開發。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。

----

## 畫面截圖
![](https://i.imgur.com/6HiJbVD.png)
> 查詢使用者

![](https://i.imgur.com/QO6FoMb.png)
> 建立使用者

![](https://i.imgur.com/EB2OJf1.png)
> 刪除特定使用者
