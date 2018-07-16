# telegram_bot_message
Send bot messages from php codeigniter to telegram


<b>Step 1</b>:Search "botfather" in telegram and enter it

<b>Step 2</b>:Send message "/newbot"
![alt text](https://user-images.githubusercontent.com/39497186/42725247-6161e83a-879e-11e8-9dc1-4741d10acca2.png)

<b>Step 3</b>:So it will ask bot name type the bot name (eg:"telegram_bot_message") after that it will ask username of bot it should end with _bot
eg:example_php_tele_bot, after that it will give you the bot token as like below
![image](https://user-images.githubusercontent.com/39497186/42725305-57499e46-879f-11e8-9417-34f384df023b.png)

<b>Step 4</b>:Search the bot username and enter it and add the bot into your group
![image](https://user-images.githubusercontent.com/39497186/42725395-55fcaaa0-87a0-11e8-8762-3ee1252762a1.png)

<b>Step 5</b>:Enter /start that group and HIT this url 
https://api.telegram.org/bot<bot_token>/getUpdates <br>
 <b>bot_token which we git while creating the bot</b><br>
 In that URL you will find the group <b>chat_id</b> note that too.. 
![image](https://user-images.githubusercontent.com/39497186/42725498-04ab52ee-87a2-11e8-8406-96861145f9c8.png)

<b>Step 6</b>:Get the lib telegram in the location "telegram_bot_message/application/libraries/"
and get the config file "telegram.php" from the location "telegram_bot_message/application/config/"
and place into your codeigniter setup and autoload the lib in autoload.php in config folder <br>
<h1>$autoload['libraries'] = array("telegram/telegram_lib");</h1>

<b>Step 7</b>:Config the bot_token and chat_id in telegram config file<br>
chat_id will your group id or any user id in that JSON image <br>
<h1>$config['bot_token'] = 'BOT_TOKEN';</h1>
<h1>$config['chat_id'] = 'CHAT_ID';</h1>

<b>Step 8</b>:Start use the below lib functions in all your controller
<ul>
<li>$this->telegram_lib->sendmsg("test")</li>
<li>$this->telegram_lib->sendlocation("12.114","72.100")@lat,@long</li>
<li>$this->telegram_lib->sendimg("/path/to/img","img caption")@img path,@caption=optional</li>
<li>$this->telegram_lib->sendaudio("/path/to/audio","audio caption")@audio path,@caption=optional</li>
<li>$this->telegram_lib->senddoc("/path/to/doc","doc caption")@doc path,@caption=optional</li>
<li>$this->telegram_lib->sendvenue("12.114","72.100","title","address")@lat,@long,@title,@address</li>
<li>$this->telegram_lib->sendcontact("9874651230","first name","last name")@phone,@first_name,@last_name=optional</li>
</ul><br>
it works!!!!!!<br>

![image](https://user-images.githubusercontent.com/39497186/42725775-1c037c64-87a7-11e8-8bbd-14f36f59e61d.png)

<br>
Thank you,<br>
Prasaath V<br>
<a href="http://www.zcodiatechnologies.com/">ZcodiaTech</a><br>



