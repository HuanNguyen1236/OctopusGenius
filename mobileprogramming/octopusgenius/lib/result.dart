import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:octopusgenius/home.dart';
import 'package:octopusgenius/level.dart';
import 'package:octopusgenius/profile2.dart';
import 'package:octopusgenius/setting_privacy1.dart';

class result extends StatefulWidget {
  @override
  State<StatefulWidget> createState() {
    return resultstate();
  }
}

class resultstate extends State {
  bool click = true;
  // ignore: prefer_typing_uninitialized_variables
  var dem;

  @override
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
                  onPressed: () {
                    Navigator.push(
                      context,
                      MaterialPageRoute(
                        builder: (context) => profile2(),
                      ),
                    );
                  },
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
                    color: Color.fromARGB(255, 244, 224, 133),
                    width: double.infinity,
                    height: 390,
                    child: Column(
                      children: [
                        Container(
                          color: Color.fromARGB(255, 244, 224, 133),
                          child: Column(
                            children: [
                              ClipRRect(
                                child: Container(
                                  width: double.infinity,
                                  color: Color.fromARGB(255, 40, 3, 105),
                                  child: Padding(
                                    padding: const EdgeInsets.all(10),
                                    child: Align(
                                      child: Text(
                                        'Result',
                                        style: TextStyle(
                                          fontSize: 35,
                                          fontWeight: FontWeight.bold,
                                          color:
                                              Color.fromARGB(255, 255, 218, 54),
                                        ),
                                      ),
                                    ),
                                  ),
                                ),
                                borderRadius: BorderRadius.circular(0),
                              ),
                              SizedBox(
                                height: 20,
                              ),
                              Container(
                                padding: EdgeInsets.only(left: 30),
                                child: Column(
                                  children: [
                                    Container(
                                      child: Column(
                                        children: [
                                          Row(
                                            mainAxisAlignment:
                                                MainAxisAlignment.start,
                                            children: [
                                              Text(
                                                'Field : ',
                                                style: TextStyle(
                                                  fontSize: 25,
                                                  fontWeight: FontWeight.bold,
                                                  color: Color.fromARGB(
                                                      255, 40, 3, 105),
                                                ),
                                              ),
                                              Text(
                                                'Linh vuc  ',
                                                style: TextStyle(
                                                  fontSize: 25,
                                                  fontWeight: FontWeight.bold,
                                                  color: Color.fromARGB(
                                                      255, 40, 3, 105),
                                                ),
                                              ),
                                            ],
                                          ),
                                        ],
                                      ),
                                    ),
                                    SizedBox(
                                      height: 20,
                                    ),
                                    Column(
                                      children: [
                                        Row(
                                          mainAxisAlignment:
                                              MainAxisAlignment.start,
                                          children: [
                                            Text(
                                              'Level : ',
                                              style: TextStyle(
                                                fontSize: 25,
                                                fontWeight: FontWeight.bold,
                                                color: Color.fromARGB(
                                                    255, 40, 3, 105),
                                              ),
                                            ),
                                            Text(
                                              'Do kho ',
                                              style: TextStyle(
                                                fontSize: 25,
                                                fontWeight: FontWeight.bold,
                                                color: Color.fromARGB(
                                                    255, 40, 3, 105),
                                              ),
                                            ),
                                          ],
                                        ),
                                      ],
                                    ),
                                    SizedBox(
                                      height: 20,
                                    ),
                                    Column(
                                      children: [
                                        Row(
                                          mainAxisAlignment:
                                              MainAxisAlignment.start,
                                          children: [
                                            Text(
                                              'Time : ',
                                              style: TextStyle(
                                                fontSize: 25,
                                                fontWeight: FontWeight.bold,
                                                color: Color.fromARGB(
                                                    255, 40, 3, 105),
                                              ),
                                            ),
                                            Text(
                                              'Thoi gian ',
                                              style: TextStyle(
                                                fontSize: 25,
                                                fontWeight: FontWeight.bold,
                                                color: Color.fromARGB(
                                                    255, 40, 3, 105),
                                              ),
                                            ),
                                          ],
                                        ),
                                      ],
                                    ),
                                    SizedBox(
                                      height: 0,
                                    ),
                                    SizedBox(
                                      height: 20,
                                    ),
                                    Row(
                                      mainAxisAlignment:
                                          MainAxisAlignment.start,
                                      children: [
                                        Row(
                                          children: [
                                            Image(
                                              image: AssetImage(
                                                'icons/star.png',
                                              ),
                                              width: 40,
                                            ),
                                            Text(
                                              '10',
                                              style: TextStyle(
                                                fontSize: 25,
                                                fontWeight: FontWeight.bold,
                                                color: Color.fromARGB(
                                                    255, 40, 3, 105),
                                              ),
                                            ),
                                          ],
                                        ),
                                        SizedBox(
                                          width: 50,
                                        ),
                                        Row(
                                          children: [
                                            Image(
                                              image: AssetImage(
                                                'icons/crab.png',
                                              ),
                                              width: 45,
                                            ),
                                            Text(
                                              '10',
                                              style: TextStyle(
                                                fontSize: 25,
                                                fontWeight: FontWeight.bold,
                                                color: Color.fromARGB(
                                                    255, 40, 3, 105),
                                              ),
                                            ),
                                          ],
                                        ),
                                      ],
                                    ),
                                  ],
                                ),
                              ),
                              SizedBox(
                                height: 20,
                              ),
                              Row(
                                mainAxisAlignment: MainAxisAlignment.center,
                                children: [
                                  ClipRRect(
                                    child: Container(
                                      width: 200,
                                      height: 60,
                                      color: Color.fromARGB(255, 40, 3, 105),
                                      child: MaterialButton(
                                        onPressed: () {
                                          Navigator.push(
                                            context,
                                            MaterialPageRoute(
                                              builder: (context) => level(),
                                            ),
                                          );
                                        },
                                        child: Row(
                                          children: [
                                            Icon(
                                              Icons.replay,
                                              size: 35,
                                              color: Color.fromARGB(
                                                  255, 255, 218, 54),
                                            ),
                                            SizedBox(
                                              width: 10,
                                            ),
                                            Text(
                                              'Play again',
                                              style: TextStyle(
                                                fontSize: 20,
                                                fontWeight: FontWeight.bold,
                                                color: Color.fromARGB(
                                                    255, 255, 218, 54),
                                              ),
                                            ),
                                          ],
                                        ),
                                      ),
                                    ),
                                    borderRadius: BorderRadius.circular(30),
                                  )
                                ],
                              )
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
