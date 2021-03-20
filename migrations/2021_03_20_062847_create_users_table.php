<?php

declare(strict_types=1);
/**
 * hyperf-fanerblog.
 *
 * @link     https://findcat.cn
 * @document https://findcat.cn/about
 * @contact  1476982312@qq.com
 */
use Hyperf\Database\Migrations\Migration;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Schema\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username')->nullable()->comment('用户名');
            $table->string('password')->nullable()->comment('登录密码');
            $table->string('nickname')->default('')->comment('昵称');
            $table->string('mobile')->nullable()->comment('手机号');
            $table->string('email')->nullable()->comment('邮箱地址');
            $table->string('qq')->nullable()->comment('QQ');
            $table->string('birthday')->nullable()->comment('生日');
            $table->string('gender')->nullable()->comment('性别');
            $table->string('avatar')->nullable()->comment('头像地址');
            $table->enum('user_type', ['ROOT', 'ADMIN', 'USER'])->nullable()->comment('用户类型');
            $table->string('blog')->nullable()->comment('个人博客地址');
            $table->string('location')->nullable()->comment('地址');
            $table->enum('source', ['GITEE', 'WEIBO', 'DINGTALK', 'BAIDU', 'CSDN', 'CODING', 'OSCHINA', 'TENCENT_CLOUD', 'ALIPAY', 'TAOBAO',
                'QQ', 'WECHAT', 'GOOGLE', 'FACEBOOK', ])->nullable()->comment('用户来源');
            $table->string('uuid')->nullable()->comment('用户唯一标识(第三方网站)');
            $table->string('privacy')->nullable()->comment('隐私（1：公开，0：不公开）');
            $table->string('notification')->nullable()->comment('通知：(1：通知显示消息详情，2：通知不显示详情)');
            $table->string('reg_ip')->nullable()->comment('注册IP');
            $table->string('last_login_ip')->nullable()->comment('最近登录IP');
            $table->string('last_login_time')->nullable()->comment('最近登录时间');
            $table->string('login_count')->nullable()->comment('登录次数');
            $table->string('status')->nullable()->comment('用户状态');
            $table->string('remark')->nullable()->comment('用户备注');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
