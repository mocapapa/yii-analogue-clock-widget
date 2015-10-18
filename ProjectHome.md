## How to make a skeleton application having a clock widget ##

  1. Get the files under the trunk of the google code repository using svn.
```
$ svn checkout http://yii-analogue-clock-widget.googlecode.com/svn/trunk/ <yii-analogue-clock-widget>
```
  1. Create a skeleton application using yiic.
```
$ cd <yii-demo-directory>
$ ../framework/yiic webapp <app-name>
```
  1. Copy image files and php files to the skeleton application.
```
$ cp <yii-analogue-clock-widget>/analogue-clock-*.png <app-name>/images/
$ cp <yii-analogue-clock-widget>/Clock.php <app-name>/protected/components/
$ mkdir <app-name>/protected/components/views
$ cp <yii-analogue-clock-widget>/analogue-clock.php !$
```
  1. Change the layout from 'cloumn1' to 'column2' in the controller (protected/components/Controller.php).
```
  public $layout='//layouts/column2';
```
  1. Add a widget call in the side bar in the view file (protected/views/layouts/column2.php), just before the end of the side-bar.
```
  <?php $this->widget('Clock'); ?>
  </div><!-- sidebar -->
```
  1. You get the clock widget in the side bar of the skeleton application as follows.
![http://yii-analogue-clock-widget.googlecode.com/svn/trunk/screenshot.jpg](http://yii-analogue-clock-widget.googlecode.com/svn/trunk/screenshot.jpg)
  1. Demo:
http://sakura.pugpug.org/demos/analog-clock/