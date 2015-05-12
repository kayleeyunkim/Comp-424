#!/bin/bash
# mysql deny incoming connections
iptables -t filter -A OUTPUT -p tcp --dport 3306 -j ACCEPT
iptables -t filter -A INPUT -p tcp --sport 3306 -m conntrack --ctstate ESTABLISHED -j ACCEPT
# prevent denial of service
# 25 connections per minute after 100
# http://www.thegeekstuff.com/2011/06/iptables-rules-examples/
iptables -A INPUT -p tcp --dport 80 -m limit --limit 25/minute --limit-burst 100 -j ACCEPT
# allow loopback access
iptables -A INPUT -i lo -j ACCEPT
iptables -A OUTPUT -o lo -j ACCEPT
# allow ping from outside to inside
# http://www.thegeekstuff.com/2011/06/iptables-rules-examples/
iptables -A INPUT -p icmp --icmp-type echo-request -j ACCEPT
iptables -A OUTPUT -p icmp --icmp-type echo-reply -j ACCEPT
# logs all dropped packets to /var/log/messages
# http://www.thegeekstuff.com/2012/08/iptables-log-packets/
iptables -N LOGGING
iptables -A INPUT -j LOGGING
iptables -A OUTPUT -j LOGGING
iptables -A LOGGING -m limit --limit 2/min -j LOG --log-prefix "IPTables-Dropped: " --log-level 4
iptables -A LOGGING -j DROP