import 'dart:async';

import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:octopusgenius/home.dart';
import 'package:octopusgenius/level.dart';
import 'package:octopusgenius/result.dart';
import 'package:octopusgenius/setting_privacy1.dart';
import 'package:get/get.dart';

class game extends StatefulWidget {
  @override
  State<StatefulWidget> createState() {
    return gamestate();
  }
}

class gamestate extends State<game> {
  int timeleft = 20;
  void startcountdown() {
    Timer.periodic(Duration(seconds: 1), (timer) {
      if (timeleft > 0) {
        setState(() {
          timeleft--;
        });
      } else {
        timer.cancel();
        Navigator.push(
          context,
          MaterialPageRoute(
            builder: (context) => result(),
          ),
        );
      }
    });
  }

  Widget build(BuildContext context) {
    return Container(
      decoration: BoxDecoration(
        image: DecorationImage(
          image: AssetImage('images/background.png'),
          fit: BoxFit.cover,
        ),
      ),
      child: Scaffold(
        appBar: PreferredSize(
          child: AppBar(
            title: const Text(
              "Username",
              style: TextStyle(
                fontSize: 25,
              ),
            ),
            actions: <Widget>[],
            backgroundColor: Color.fromARGB(255, 40, 3, 105),
            leading: Container(
              width: 70,
              child: CircleAvatar(
                child: IconButton(
                  padding: EdgeInsets.only(right: 0),
                  onPressed: () {},
                  icon: Icon(Icons.person),
                ),
              ),
            ),
            shape: RoundedRectangleBorder(
              borderRadius: BorderRadius.only(
                bottomRight: Radius.circular(40),
              ),
            ),
          ),
          preferredSize: Size.fromHeight(80),
        ),
        backgroundColor: Colors.transparent,
        body: Center(
          child: Stack(
            children: [
              Container(
                child: Row(
                  mainAxisAlignment: MainAxisAlignment.spaceAround,
                  children: [
                    Container(
                      child: Row(
                        children: [
                          Image(
                            image: AssetImage('icons/star.png'),
                            width: 30,
                          ),
                          Text(
                            "99999",
                            style: TextStyle(
                                fontSize: 15, fontWeight: FontWeight.bold),
                          ),
                        ],
                      ),
                    ),
                    Container(
                      child: Row(
                        children: [
                          Image(
                            image: AssetImage('icons/crab.png'),
                            width: 40,
                          ),
                          Text(
                            "99999",
                            style: TextStyle(
                              fontSize: 15,
                              fontWeight: FontWeight.bold,
                            ),
                          ),
                        ],
                      ),
                    ),
                  ],
                ),
              ),
              Center(
                child: Opacity(
                  opacity: 0.95,
                  child: Container(
                    color: Color.fromARGB(255, 79, 17, 186),
                    width: double.infinity,
                    height: 390,
                    child: Column(
                      children: [
                        Container(
                          color: Color.fromARGB(255, 40, 3, 105),
                          width: double.infinity,
                          height: 50,
                          child: Row(
                            mainAxisAlignment: MainAxisAlignment.spaceBetween,
                            children: [
                              MaterialButton(
                                onPressed: startcountdown,
                                child: Text('sTARR'),
                              ),
                              Text(
                                timeleft.toString(),
                                style: TextStyle(
                                  fontSize: 20,
                                  color: Colors.white,
                                  fontWeight: FontWeight.bold,
                                ),
                              ),
                              Row(
                                children: [
                                  MaterialButton(
                                    onPressed: () {
                                      showDialog(
                                        context: context,
                                        builder: (BuildContext context) {
                                          return SimpleDialog(
                                            children: [
                                              ClipRRect(
                                                child: Container(
                                                  color: Color.fromARGB(
                                                      255, 40, 3, 105),
                                                  child: Column(
                                                    children: [
                                                      Image(
                                                        image: AssetImage(
                                                          'icons/octopus.png',
                                                        ),
                                                        width: 50,
                                                      ),
                                                      Text(
                                                        "Gợi ý",
                                                        style: TextStyle(
                                                          fontSize: 30,
                                                          color: Colors.white,
                                                        ),
                                                      ),
                                                    ],
                                                  ),
                                                ),
                                                borderRadius:
                                                    BorderRadius.circular(0),
                                              ),
                                              Align(
                                                child: Container(
                                                  child: Padding(
                                                    padding:
                                                        const EdgeInsets.all(
                                                      20,
                                                    ),
                                                    child: Text(
                                                      'Cắm vào run rẩy toàn thân\nRút ra nước chảy từ chân xuống sàn\nHỡi chàng công tử giàu sang\nCắm vào xin chớ vội vàng rút ra!\nĐó là cái gì ?',
                                                      style: TextStyle(
                                                        fontSize: 20,
                                                      ),
                                                    ),
                                                  ),
                                                ),
                                              ),
                                              Container(
                                                child: Row(
                                                  mainAxisAlignment:
                                                      MainAxisAlignment
                                                          .spaceBetween,
                                                  children: [
                                                    ClipRRect(
                                                      borderRadius:
                                                          BorderRadius.circular(
                                                              50),
                                                      child: Container(
                                                        height: 50,
                                                        color: Color.fromARGB(
                                                            255, 40, 3, 105),
                                                        child: MaterialButton(
                                                          onPressed: () {
                                                            Navigator.pop(
                                                              context,
                                                              MaterialPageRoute(
                                                                builder:
                                                                    (context) =>
                                                                        game(),
                                                              ),
                                                            );
                                                          },
                                                          child: Text(
                                                            'Thoat',
                                                            style: TextStyle(
                                                              color: Color
                                                                  .fromARGB(
                                                                      255,
                                                                      255,
                                                                      255,
                                                                      255),
                                                              fontSize: 17,
                                                            ),
                                                          ),
                                                        ),
                                                      ),
                                                    ),
                                                    ClipRRect(
                                                      borderRadius:
                                                          BorderRadius.circular(
                                                              50),
                                                      child: Container(
                                                        height: 50,
                                                        color: Color.fromARGB(
                                                            255, 40, 3, 105),
                                                        child: MaterialButton(
                                                          onPressed: () {
                                                            showDialog(
                                                              context: context,
                                                              builder:
                                                                  (BuildContext
                                                                      context) {
                                                                return SimpleDialog(
                                                                  children: [
                                                                    ClipRRect(
                                                                      child:
                                                                          Container(
                                                                        color: Color.fromARGB(
                                                                            255,
                                                                            40,
                                                                            3,
                                                                            105),
                                                                        child:
                                                                            Column(
                                                                          children: [
                                                                            Image(
                                                                              image: AssetImage(
                                                                                'icons/octopus.png',
                                                                              ),
                                                                              width: 50,
                                                                            ),
                                                                            Text(
                                                                              "Gợi ý",
                                                                              style: TextStyle(
                                                                                fontSize: 30,
                                                                                color: Colors.white,
                                                                              ),
                                                                            ),
                                                                          ],
                                                                        ),
                                                                      ),
                                                                      borderRadius:
                                                                          BorderRadius.circular(
                                                                              0),
                                                                    ),
                                                                    Align(
                                                                      child:
                                                                          Container(
                                                                        child:
                                                                            Padding(
                                                                          padding:
                                                                              const EdgeInsets.all(
                                                                            20,
                                                                          ),
                                                                          child:
                                                                              Text(
                                                                            'Noi dung  goi y',
                                                                            style:
                                                                                TextStyle(
                                                                              fontSize: 20,
                                                                            ),
                                                                          ),
                                                                        ),
                                                                      ),
                                                                    ),
                                                                    Container(
                                                                      child:
                                                                          Row(
                                                                        mainAxisAlignment:
                                                                            MainAxisAlignment.center,
                                                                        children: [
                                                                          ClipRRect(
                                                                            borderRadius:
                                                                                BorderRadius.circular(50),
                                                                            child:
                                                                                Container(
                                                                              height: 50,
                                                                              color: Color.fromARGB(255, 40, 3, 105),
                                                                              child: MaterialButton(
                                                                                onPressed: () {
                                                                                  Navigator.pop(
                                                                                    context,
                                                                                    MaterialPageRoute(
                                                                                      builder: (context) => game(),
                                                                                    ),
                                                                                  );
                                                                                },
                                                                                child: Text(
                                                                                  'Thoat',
                                                                                  style: TextStyle(
                                                                                    color: Color.fromARGB(255, 255, 255, 255),
                                                                                    fontSize: 17,
                                                                                  ),
                                                                                ),
                                                                              ),
                                                                            ),
                                                                          ),
                                                                        ],
                                                                      ),
                                                                    ),
                                                                  ],
                                                                );
                                                              },
                                                            );
                                                          },
                                                          child: Row(
                                                            children: [
                                                              Image(
                                                                image: AssetImage(
                                                                    'icons/crab.png'),
                                                              ),
                                                              Text(
                                                                '10',
                                                                style:
                                                                    TextStyle(
                                                                  color: Colors
                                                                      .white,
                                                                  fontSize: 17,
                                                                ),
                                                              ),
                                                              SizedBox(
                                                                width: 10,
                                                              ),
                                                              Text(
                                                                'Mua goi y',
                                                                style:
                                                                    TextStyle(
                                                                  color: Color
                                                                      .fromARGB(
                                                                          255,
                                                                          255,
                                                                          255,
                                                                          255),
                                                                  fontSize: 17,
                                                                ),
                                                              ),
                                                            ],
                                                          ),
                                                        ),
                                                      ),
                                                    ),
                                                  ],
                                                ),
                                              ),
                                            ],
                                          );
                                        },
                                      );
                                    },
                                    child: Row(
                                      children: [
                                        Image(
                                          image:
                                              AssetImage('icons/octopus.png'),
                                          width: 35,
                                        ),
                                        Text(
                                          "Gợi ý",
                                          style: TextStyle(
                                            color: Colors.white,
                                            fontSize: 20,
                                          ),
                                        ),
                                      ],
                                    ),
                                  ),
                                  SizedBox(
                                    width: 20,
                                  ),
                                  Row(
                                    children: [
                                      Image(
                                        image: AssetImage('icons/star.png'),
                                        width: 35,
                                      ),
                                      Text(
                                        '10',
                                        style: TextStyle(
                                          fontSize: 20,
                                          color: Colors.white,
                                          fontWeight: FontWeight.bold,
                                        ),
                                      ),
                                    ],
                                  ),
                                  SizedBox(
                                    width: 50,
                                  ),
                                ],
                              ),
                            ],
                          ),
                        ),
                        Container(
                          height: 180,
                          width: double.infinity,
                          child: Container(
                            child: Stack(
                              children: [
                                Container(
                                  padding: EdgeInsets.all(20),
                                  child: Text(
                                    'Cắm vào run rẩy toàn thân\nRút ra nước chảy từ chân xuống sàn\nHỡi chàng công tử giàu sang\nCắm vào xin chớ vội vàng rút ra!\nĐó là cái gì ?',
                                    style: TextStyle(
                                      color: Colors.white,
                                      fontSize: 20,
                                    ),
                                  ),
                                ),
                              ],
                            ),
                          ),
                        ),
                        Container(
                          height: 150,
                          width: double.infinity,
                          child: GridView(
                            gridDelegate:
                                SliverGridDelegateWithFixedCrossAxisCount(
                              crossAxisCount: 2,
                              childAspectRatio: 3.5,
                              mainAxisSpacing: 10,
                              crossAxisSpacing: 10,
                            ),
                            children: [
                              ClipRRect(
                                borderRadius: BorderRadius.circular(50),
                                child: Container(
                                  height: 50,
                                  color: Colors.white,
                                  child: MaterialButton(
                                    onPressed: () {},
                                    child: Text(
                                      'Tủ lạnh',
                                      style: TextStyle(
                                        color: Color.fromARGB(255, 40, 3, 105),
                                        fontSize: 17,
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                              ClipRRect(
                                borderRadius: BorderRadius.circular(50),
                                child: Container(
                                  height: 50,
                                  color: Colors.white,
                                  child: MaterialButton(
                                    onPressed: () {
                                      Navigator.push(
                                        context,
                                        MaterialPageRoute(
                                          builder: (context) => result(),
                                        ),
                                      );
                                    },
                                    child: Text(
                                      'Máy giặt',
                                      style: TextStyle(
                                        color: Color.fromARGB(255, 40, 3, 105),
                                        fontSize: 17,
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                              ClipRRect(
                                borderRadius: BorderRadius.circular(50),
                                child: Container(
                                  height: 50,
                                  color: Colors.white,
                                  child: MaterialButton(
                                    onPressed: () {},
                                    child: Text(
                                      'Máy lạnh',
                                      style: TextStyle(
                                        color: Color.fromARGB(255, 40, 3, 105),
                                        fontSize: 17,
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                              ClipRRect(
                                borderRadius: BorderRadius.circular(50),
                                child: Container(
                                  height: 50,
                                  color: Colors.white,
                                  child: MaterialButton(
                                    onPressed: () {},
                                    child: Text(
                                      'Lò nướng',
                                      style: TextStyle(
                                        color: Color.fromARGB(255, 40, 3, 105),
                                        fontSize: 17,
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ],
                          ),
                        ),
                      ],
                    ),
                  ),
                ),
              ),
            ],
          ),
        ),
        floatingActionButton: Container(
          width: 70,
          child: SizedBox(
            height: 100,
            child: FloatingActionButton(
              child: Icon(
                Icons.home,
                size: 40,
              ),
              backgroundColor: Color.fromARGB(255, 40, 3, 105),
              onPressed: () {
                Navigator.push(
                  context,
                  MaterialPageRoute(
                    builder: (context) => home(),
                  ),
                );
              },
            ),
          ),
        ),
        floatingActionButtonLocation: FloatingActionButtonLocation.centerDocked,
        bottomNavigationBar: BottomAppBar(
          shape: CircularNotchedRectangle(),
          child: Container(
            height: 70,
          ),
        ),
      ),
    );
  }
}
