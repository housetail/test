#!/usr/bin/python
# -*- coding: utf-8 -*-
import sys
import time
import mail
import os
import urllib

if __name__ == "__main__":
    authInfo = {}
    authInfo['server'] = 'smtp.sina.com.cn'
    authInfo['user'] = 'shuweimajia';
    authInfo['password'] = 'cswcsg1007'
    fromAdd = 'shuweimajia@sina.com'
    toAdd = 'shuwei@staff.sina.com.cn'
    subject = u'来自排行系统的监控邮件'
    plainText = '这里是普通文本'
    htmlText = time.time()
    mail.sendEmail(authInfo, fromAdd, toAdd, subject, plainText, htmlText)

