---
layout: post
title: Online services x Japan!
categories: [Blog]
tags: [yapping, general]
---

## From web 2.0 to 0.5

Past five years i've been staying in Japan for a good while. For those who are from Europe know that many online services in EU are high level, at least in nordics. Like literally everything can and has to be done online, from banking to healthcare there is some online service you will have to use as you literally can not get human-to-human service anymore. 

Before i came to Japan first time, i thought it was a technologically advanced country and in many cases it is. In fact it is very very advanced, there is all kinds of robotics and very advanced hardware tech but in alot of cases it feels like we are living in 2003 or even 90's and one of the part that feels like living in early 2000's is services on internet. There are countless of services that have horrible UX designs but also on API design. When you are living rather basic life and if you are younger you dont see these things but as a father and husband i got countless offices i need to interact with, mostly healthcare and childcare related services but also government and city level services. 

## Some weird findings from this year

### Hospital queue enpoints had no access control
Early this year i find out that one hospital online booking service opens up around 3 pm for evening appointments and by the time it hits 3.01pm the line is like 50 people so i decided to dig around and find that i could call the api with any application as the booking service doesn't require any type of login, it is open endpoint so i can literally call it with script and so i did, never waiting in a line anymore.

### Who has card reader at home?
Recently we figured out that I need to make one more application to immigration bureau to leave the country. That place is packed with people, always. When i applied my residency and I mean just left application, we had to wait like 3 hours to get to the counter, not to mention the fact that when i picked up my residency card i left to the office around 5:45 am and office opens at 9 am and i was not the first in the line. 

Now second time i had all kinds of residency cards and stuff so i could make application online or so we thought. We were excited only to findout that the online application requires a card reader. Suddenly I had a flashback, this happened to me in Finland too almost 20 years ago.

In Finland we had this id card that you could use to identify but in order to identify you needed a card reader, for some reason that identification card disappeared and now we have this online banking identification system that works with mobile phone or your phone number.

Well, guess i have to get the reader or just go to the office.

### USB ports exposed to customer
This is not so much related to online services but i was surprised what kind of low hanging fruit to tackle. 

We went to register my info at city hall to get my social security number(the card I was talking about previously) to make it easier to interact with different officials. Registering took again like 3 hours or something (we even had a lunch in restaurant) and i had alot of time to explore my surroundings while waiting and the most funny part was that computers that are connected to city/government network and handling all kinds of data from pensions to social security related things had all usb ports and RJ45 literally exposed to client side, small computer was located even behind the monitor so worker had no visual to device. When worker left the computer, they also left it unlocked. I mean, i sometimes see this in Finland too, especially hospitals are very generously positioning their devices but at least usually usb sticks cant execute anything automatically by GPO, might be the same thing in Japan too. Still RJ 45 and screen cables can also be used for malicious acts.

I can see it is trust based community here in Japan, i think it is about to change with the current influx of foreigners. 

## Still, i love this country

I think the cyber security is other story but the online services are not going to improve in near future i feel like. Alot of Japanese people tend to use mobile applications instead of web services but the application development is not the strongest one either, Osaka Expo 2025 application is extremely slow, I thought it is slow because we are other side of the world but it is actually just as slow from Japan as it is in Finland. It just begs the question, why is SWE lacking behind in alot of cases? Whatever the reason is, I'm not here to judge just my observations!

What I absolutely love is that there is still possibility to get human-to-human services in Japan, and whats more, i can use cash and no one thinks I'm criminal.


